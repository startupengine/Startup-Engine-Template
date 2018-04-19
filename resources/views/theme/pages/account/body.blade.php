<body class="index-page sidebar-collapse">
<div id="startup_engine_nav_container"></div>
<div class="wrapper">
    <div class="main" >
        <div  class="section particles-js bg-gradient-blue" style="min-height:100vh;">
            <div class="space-50"></div>
            <div class="container text-center">
                <div class="row justify-content-md-center"  align="center">
                    <div class="col-md-12" style="margin-bottom:0px;margin-top:25px;">
                        <h2 class="title" style="width:100%;color:#fff;">
                            Account Settings
                        </h2>
                    </div>
                    <div class="col-md-3" align="center">
                        <ul class="list-group" id="account-menu">
                            <a href="#profile-card" class="list-group-item  list-group-item-action"><i class="now-ui-icons users_circle-08"></i>&nbsp; Profile</a>
                            <a style="display:none;" href="#newsletter-card" class="list-group-item  list-group-item-action"><i class="now-ui-icons ui-1_email-85"></i>&nbsp; Newsletter</a>
                            <a href="#subscription-card" class="list-group-item  list-group-item-action"><i class="now-ui-icons shopping_box"></i>&nbsp; Subscription</a>
                            <a href="#payment-card" class="list-group-item  list-group-item-action"><i class="now-ui-icons shopping_credit-card"></i>&nbsp; Payment Method</a>
                        </ul>
                    </div>
                    <div class="col-md-9" align="center">
                        <div class="card-deck" id="account-overview">
                            <div class="card" style="min-width:calc(50% - 30px);" id="profile-card">
                                <div class="card-header">
                                    Profile
                                </div>

                                <div class="card-body">
                                    <p class="card-text" style="">{!! \Auth::user()->name !!}</p>
                                    <h3 class="card-title" align="center"><span style="font-size:14px;">{!! \Auth::user()->email !!}</span></h3>
                                    <a href="/subscribe" class="btn btn-round btn-secondary" data-toggle="modal" data-target="#updateProfile">Update</a>

                                </div>
                            </div>

                            <div class="card" style="min-width:calc(100% - 30px);display:none;" id="newsletter-card">
                                <div class="card-header">
                                    Newsletter <span class="fa fa-cog pull-right" style="margin-top:2px;cursor: pointer;" id="newsletter-settings-icon"></span>
                                </div>

                                <div class="card-body" style="min-height:50px;">
                                    <p class="card-text"><span class="badge">Following 16 topics</span></p>
                                </div>

                            </div>
                            <div class="card" style="min-width:calc(100% - 30px);" id="subscription-card">
                                <div class="card-header">
                                    Current Subscription
                                </div>

                                <div class="card-body">
                                    <p class="card-text"><?php  if(\Auth::user()->subscriptions()->get()->isEmpty()) { } else { echo ucfirst(\Auth::user()->subscriptions[0]->name); } ?> </p>
                                    <h3 class="card-title" align="center"><?php  if(\Auth::user()->subscriptions()->get()->isEmpty()) { ?><span style="font-size:14px;">No Plan Selected</span> <?php } else { ?><span style="font-size:14px;">${{\Auth::user()->subscriptions[0]->price}} / month</span><?php } ?></h3>
                                    <a href="/pricing" class="btn btn-round btn-secondary">Switch Plans</a>

                                </div>
                            </div>

                            <div class="card" id="payment-card">
                                <div class="card-header">
                                    Payment Method
                                </div>
                                <div class="card-body" >
                                    <form id="payment-form">
                                        <div class="form-row">
                                            <label for="card-element" style="font-weight:normal;">
                                                Credit or debit card
                                            </label>
                                            <div id="card-element" style="box-shadow:none;">
                                                <!-- A Stripe Element will be inserted here. -->
                                            </div>
                                            <!-- Used to display Element errors. -->
                                            <div id="card-errors" role="alert" style="height:40px;padding-top:15px;text-align:center;width:100%;"></div>
                                        </div>


                                        <button class="btn btn-default btn-secondary" id="submit-button" style="margin-top:25px;">Update &nbsp<i class="fa fa-caret-right"></i></i></button>
                                    </form>
                                </div>
                            </div>
                            <div id="invoices" class="card">
                                <div class="card-header">
                                    Recent Payments
                                </div>
                                <div class="card-body"  style="color:#333 !important;">


                                    <div id="articles">
                                        <todo-item
                                                v-for="item in items"
                                                v-bind:article="item"
                                                v-bind:key="item.id"
                                                v-bind:href="item.slug" >
                                        </todo-item>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Core -->
<div class="modal fade" id="updateProfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <form>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 style="margin-top:0px;" class="modal-title" id="myModalLabel">Edit Profile</h4>
            </div>
            <div class="modal-body">

                {{ csrf_field() }}
                <div class="col-md-12">

                        <div class="form-group">
                            <label for="exampleInputName">Name</label>
                            <input type="text" class="form-control" id="exampleInputName" placeholder="Name" value="{{ \Auth::user()->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ \Auth::user()->email }}">
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancel</button>
                <a href="#" class="btn btn-primary" id="syncButton">Save</a>
            </div>
        </div>
    </div>
    </form>
</div>

<script>
    // Create a Stripe client.
    var stripe = Stripe('pk_test_hY0k50cfK5VbN3JyF783523w');

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

<script>
    var queryPath = '/api/invoices/user/' + {{\Auth::user()->id}};

    Vue.component('todo-item', {
        props: ['article'],
        template:
        '<div class="invoice-item"><span class="invoice-cost">$@{{ article.amount_paid }}</span> @{{ moment(article.date*1000).calendar() }}</div>'

    });

    var app = new Vue({
            el: '#articles',
            data: {
                items: null,
                resource_url: queryPath
            },
            components: {
                VPaginator: VuePaginator
            },
            methods: {
                updateResource(data){
                    this.items = data.original.data;
                }
            },
            created: function getContent() {
                var _this = this;
                $.getJSON(queryPath, function (json) {
                    _this.items = json.original.data;
                    //console.log(json.original.data);
                });
            }
        });
</script>

<script>
    $("a[href^='#']").on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(this.hash).offset().top - 95
        }, 275);
    });
</script>