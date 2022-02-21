<x-app-layout>
    <div x-data="{ plan : 'pro', showDropDown : false }" class="mt-12">
        <div class="py-3 px-2">
            <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 mb-36">
                <div class="bg-white overflow-hidden shadow-xl rounded-lg">
                    <div class="lg:pl-36 lg:pr-36 lg:pt-5 lg:pb-10">
                        <div class="p-3 text-center">
                            <div class="p-3 w-full mb-5 bg-green-100 rounded">
                                <p>The 25% OFF Product Hunt Discount Has Been Applied!</p>
                            </div>
                            <div class="flex justify-center items-center">
                                <div class="">
                                    <img src="/offer-1.png"/>
                                </div>
                            </div>

                            <div>
                                <form action="{{ route('payment.post') }}"
                                      method="post"
                                      id="payment-form"
                                      data-secret="{{ $intent->client_secret }}"
                                      class="mt-4"
                                      data-rewardful="true"
                                >
                                    @csrf
                                    <div>
                                        <label class="mt-8 block text-sm font-medium text-gray-700" for="card-element">
                                            Credit or Debit Card
                                        </label>

                                        <center>
                                            <div id="card-element" class="w-full md:w-1/2 mt-1">
                                                <!-- A Stripe Element will be inserted here. -->
                                            </div>
                                            <p class="mt-2 block text-xs font-medium text-gray-600">Powered by Stripe</p>
                                            <p class="block text-xs font-medium text-gray-600">Safe and Secure SSL Encryption</p>
                                        </center>

                                        <!-- Used to display form errors. -->
                                        <div id="card-errors" role="alert"></div>
                                    </div>

                                    <div class="pt-5">
                                        <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-md md:text-lg font-black rounded-full shadow-sm text-white bg-blue-500 hover:bg-blue-400 focus:outline-none">
                                            Get Started Now!
                                        </button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>

    <script>
        // Create a Stripe client.
        var stripe = Stripe('{{ env('STRIPE_KEY') }}');
        // Create an instance of Elements.
        var elements = stripe.elements();
        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };
        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});
        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');
        // Handle real-time validation errors from the card Element.
        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
        // Handle form submission.
        var form = document.getElementById('payment-form');
        var clientSecret = form.dataset.secret;

        form.addEventListener('submit', async function(event) {
            event.preventDefault();

            const { setupIntent, error } = await stripe.confirmCardSetup(
                clientSecret, {
                    payment_method: {
                        card
                    }
                }
            );
            if (error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = error.message;
            } else {
                // Send the token to your server.
                stripeTokenHandler(setupIntent);
            }
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(setupIntent) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'paymentMethod');
            hiddenInput.setAttribute('value', setupIntent.payment_method);
            form.appendChild(hiddenInput);
            // Submit the form
            form.submit();
        }
    </script>

    <style>
        .StripeElement {
            box-sizing: border-box;
            height: 40px;
            padding: 10px 12px;
            border: 1px solid rgba(209, 213, 219, 1);
            border-radius: 0.375rem 0.375rem 0.375rem 0.375rem;
            background-color: white;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }
        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }
        .StripeElement--invalid {
            border-color: #fa755a;
        }
        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>

</x-app-layout>
