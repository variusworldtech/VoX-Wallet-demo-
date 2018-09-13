<!--<template>
    <form action="/depositByCard" method="POST">

        <input type="hidden" name="stripeToken"
        v-model="stripeToken">
        <input type="hidden" name="stripeEmail"
        v-model="stripeEmail">                
                
         <button type = "submit" @click.prevent="buy">Deposit using Card</button>       
    </form>
</template>

<script>
    export default {

        data() {
            return {
                stripeEmail: '',
                stripeToken: ''
            };
        },

        created(){
            this.stripe = StripeCheckout.configure({
                key: "pk_test_ov1Rp6ksiecTl3Q8xe6aqNdJ",
                //key: "{{ config('services.stripe.key')}}",
                locale: "auto",
                token: function (token){

                    this.stripeToken = token.id;
                    this.stripeEmail = token.email;
                    //document.querySelector('#stripeEmail').value = token.email;
                    //document.querySelector('#stripeToken').value = token.id;
                    //document.querySelector('#checkout-form').submit();

                    this.$http.post('/depositByCard', this.$data)

                    .then(response => alert('Complete! thanks for the payment'));
                }
            });

        },

        methods: {

            buy() {

                this.stripe.open({

                    name: 'VWT',

                    Description: 'Deposit using Debit/Credit card',

                    zipcode: true,

                    amount: 2500

                });

            }
        }

    }
</script>-->
