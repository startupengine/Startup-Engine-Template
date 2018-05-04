<body class="index-page sidebar-collapse">
<div class="wrapper" style="min-height:100vh;background-image:linear-gradient(180deg,#6087ff14,#fff) !important;background-size:cover;">
    <div class="main"  style="background:none;">
        <div  class="section" style="min-height:100vh;background:linear-gradient(180deg,#ebf2ff,#fff);background-size:cover;">
            <div class="space-50"></div>
            <div class="container text-center">
                <div class="row justify-content-md-center"  align="center">
                    <div class="col-md-12" style="margin-bottom:30px;margin-top:55px;">
                        <h2 class="title" style="width:100%;font-weight:600 !important;color:#000 !important;">
                            Subscribe
                        </h2>
                    </div>
                    <div class="col-md-12" align="center">
                        <?php  $id = app('request')->input('id');?>
                        <?php $plan = \App\Plan::where('stripe_id', '=', $id)->first();  ?>
                        <?php $product = \App\Product::where('stripe_id','=',$plan->json()->product)->first(); ?>
                        <div class="card" style="font-weight:bold;color:#333;background:#fff;align-content: center;width:340px;height:auto !important;">
                            <div class="card-header bg-gradient-orange">
                                {{ $product->name }}
                            </div>
                            <div class="card-body">
                                <form action="/subscription/submit" id="payment-form">

                                    <div class="form-row">
                                        <label for="plan">
                                            Plan
                                        </label>
                                        <div id="select-plan" style="border:none;box-shadow:none;">

                                            <p style="border-radius:5px;background:#fff;min-width:300px;border:1px solid #ddd; font-size:15px;color:#32325d;font-weight:400;"> {{ $plan->json()->nickname }} - ${{ $plan->json()->amount/100 }} per {{ $plan->json()->interval }}</p>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <label for="card-element">
                                            Credit or debit card
                                        </label>
                                        <div id="card-element" style="box-shadow:none;">
                                            <!-- A Stripe Element will be inserted here. -->
                                        </div>
                                        <!-- Used to display Element errors. -->
                                        <div id="card-errors" role="alert" style="height:40px;padding-top:15px;text-align:center;width:100%;"></div>
                                    </div>


                                    <button class="btn btn-default btn-secondary" id="submit-button" style="margin-top:25px;">Continue &nbsp<i class="fa fa-caret-right"></i></i></button>
                                    @if(\Auth::user())
                                    <input type="hidden" name="plan" value="{{$plan->stripe_id}}" />
                                    <input type="hidden" name="user_id" value="{{\Auth::user()->id}}" />
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Create a Stripe client.
    var stripe = Stripe('{{ getStripeKeys()["key"] }}');

    // Create an instance of Elements.
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
        base: {
            color: '#32325d',
            border: '1px solid #eee',
            lineHeight: '18px',
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

    card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    // Create a token or display an error when the form is submitted.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken(card).then(function(result) {
            if (result.error) {
                // Inform the customer that there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
            }
        });
    });

    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form
        form.submit();
    }

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');
</script>