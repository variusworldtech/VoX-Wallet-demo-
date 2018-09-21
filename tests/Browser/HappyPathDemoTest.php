<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HappyPathDemoTest extends DuskTestCase
{
    use RefreshDatabase;

    private $browser;
    
    /**
     * A basic happy path test for the demo.
     *
     * @return void
     */
    public function testHappyPathDemo()
    {
        $this->browse(function (Browser $browser) {
            $this->browser = $browser;

            $this->signup('Me Me', 'me@me.com');
            $this->logout();
            $this->login('me@me.com');
            $this->verifyDashboardFirstVisitAndNavigateToDeposit($browser);
            $this->associateWallet();
            $this->loadVoxByCard(200.50);
            $this->verifyBalance(200.5);
            $this->winVoX();
            $this->verifyBalance(250.5);
            $this->withdrawVoX(150.5);
            $this->verifyBalance(100);

            // Signup friend and send 40 to them
            $this->logout();
            $this->signup('A friend', 'a@friend.com');
            $this->logout();
            $this->login('me@me.com');
            $this->verifyBalance(100);
            $this->sendVoXToFriend('A friend', 2, 40.0);
            $this->verifyBalance(60);
            $this->logout();
            $this->login('a@friend.com');
            $this->verifyBalance(40); 
            $this->logout();
        });
    }

    function signup(string $name, string $email) {
        $this->browser
            ->visit('/')
            ->waitUntilMissing('#page-loader')
            ->assertSee('Varius')
            ->clickLink('Signup')
            ->assertSee('Register')
            ->type('name', $name)
            ->type('email', $email)
            ->type('password', 'Password1!')
            ->type('password_confirmation', 'Password1!')
            ->press('Register')
            ->assertPathIs('/dashboard');
}

    function logout() {
        $this->browser
            ->waitUntilMissing('#page-loader')
            ->click('#profile_pic')
            ->click('#logout')
            ->assertPathIs('/');
                    
    }

    function login(string $email) {
        $this->browser
            ->assertPathIs('/')
            ->clickLink('Login')
            ->waitUntilMissing('#page-loader')
            ->assertSee('Login')
            ->type('email', $email)
            ->type('password', 'Password1!')
            ->press('Login')
            ->assertPathIs('/dashboard');
    }

    function verifyDashboardFirstVisitAndNavigateToDeposit() {
        $this->browser
            ->assertSee('Balance: 0 VoX')
            ->clickLink('Ready to play? Load some VoX now')
            ->assertPathIs('/deposit');
    }

    function associateWallet() {
        $this->browser
            ->assertDontSee('Credit and Debit card')
            ->type('walletAddress', '0xc0ffee254729296a45a3885639AC7E10F9d54979')
            ->waitUntilMissing('#page-loader')
            ->press('Associate Wallet')
            ->assertSee('0xc0ffee254729296a45a3885639AC7E10F9d54979')
            ->assertSee('Credit and Debit card');
    }

    function loadVoxByCard(float $amount) {
        //todo: get before and after balance to confirm success
        $this->browser
            ->clickLink('Load VoX now')
            ->assertPathIs('/depositByCard')
            ->type('amount', $amount)
            ->waitFor('iframe[name=__privateStripeFrame3]');

        $this->browser->driver->switchTo()->frame('__privateStripeFrame3');

        $this->browser
            ->type('input[name="cardnumber"]', '4242 4242 4242 4242')
            ->type('input[name="exp-date"]', '11 20')
            ->keys('input[name="cvc"]', '112');
            
        $this->browser->driver->switchTo()->defaultContent();
            
        $this->browser
            ->waitUntilMissing('.fadeInUp')
            ->press('Submit Payment')
            ->waitForLocation('/dashboard')
            ->assertSee('Balance: ' . $amount . ' VoX');
    }

    function verifyBalance(float $balance) {
        $this->browser
            ->visit('/dashboard')
            ->assertSee('Balance: ' . $balance . ' VoX');
    }

    function winVoX() {
        $this->browser
            ->visit('/stake')
            ->pause(500)
            ->visit('/win');
    }

    function withdrawVoX(float $amount) {
        $this->browser
            ->clickLink('Withdraw')
            ->assertPathIs('/withdraw')
            ->clickLink('Withdraw to bank account')
            ->assertPathIs('/withdrawtobank')
            ->type('voxAmount', $amount)
            ->waitUntilMissing('#page-loader')
            ->waitUntilMissing('.fadeInUp')
            ->press('Withdraw now')
            ->assertPathIs('/dashboard');
    }

    function sendVoXToFriend(string $friendName, int $userId, float $amount) {
        $this->browser
            ->clickLink('Send')
            ->assertPathIs('/send')
            ->type('input#search', substr($friendName, 0, strlen($friendName)-3))
            ->waitUntilMissing('#page-loader')
            ->press('View profile')
            ->pause(1000)
            ->type('@amount'.$userId, $amount)
            ->press('Send')
            ->assertPathIs('/dashboard'); //todo: Shane should be able to uncomment this when implemented
    }
}
