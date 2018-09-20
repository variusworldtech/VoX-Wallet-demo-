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

            $this->signup('me@me.com');
            $this->logout('me@me.com');
            $this->login('me@me.com');
            $this->verifyDashboardFirstVisitAndNavigateToDeposit($browser);
            $this->associateWallet();
            $this->loadVoxByCard(200.50);
            // $this->logout();
            // $this->signup($browser, 'A friend', 'a@friend.com');
            // $this->logout();
            // $this->login($browser, 'me@me.com');
            // $this->findfriend('A friend');
            // $this->sendVoXToFriend(100);
            // $this->winVoX(500);
            // $this->withdrawVox(600.50);
            // $this->verifyBalance(0);
            // $this->logout();
        });
    }

    function signup() {
        $this->browser
            ->visit('/')
            ->waitUntilMissing('#page-loader')
            ->assertSee('Varius')
            ->clickLink('Signup')
            ->assertSee('Register')
            ->type('name', 'Robert Smith')
            ->type('email', 'bob@hotmail.com')
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

    function login() {
        $this->browser
            ->assertPathIs('/')
            ->clickLink('Login')
            ->waitUntilMissing('#page-loader')
            ->assertSee('Login')
            ->type('email', 'bob@hotmail.com')
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
            ->press('Submit Payment')
            ->waitForLocation('/dashboard')
            ->assertSee('Balance: ' . $amount . ' VoX');
    }
}
