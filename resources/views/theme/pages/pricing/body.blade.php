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
                            Plans
                        </h2>
                    </div>
                    <div class="col-md-12" align="center">
                       <div class="card-deck">
                           <?php $plans = \App\Plan::where('status', '=', 'ACTIVE')->get(); foreach($plans as $plan) { ?>
                               <div class="card">
                                   <div class="card-header">
                                        <?php $product = \App\Product::where('stripe_id', '=', json_decode($plan->json)->product)->first(); ?> {{ $product->name }}
                                   </div>

                                   <div class="card-body">
                                       <h3 class="card-title" align="center">${{ json_decode($plan->json)->amount }} <span style="font-size:50%;">/ month</span></h3>
                                       <p class="card-text">{{ $product->description }}</p>
                                   </div>
                                   <div class="card-footer" align="center">
                                        @if (\Auth::user()->subscribed($product->name))
                                       <a href="/subscribe" class="btn btn-round btn-default ">Subscribed</a>
                                        @else
                                       <a href="/subscribe" class="btn btn-round bg-gradient-orange">Start Free Trial</a>
                                        @endif
                                       </a>
                                   </div>
                               </div>
                           <?php } ?>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
