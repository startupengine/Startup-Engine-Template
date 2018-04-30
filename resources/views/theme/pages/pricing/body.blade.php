<body class="index-page sidebar-collapse">
<div id="startup_engine_nav_container"></div>
<div class="wrapper">
    <div class="page-header" style="height:100vh;">
        <div  class="section particles-js bg-gradient-blue" style="min-height:100vh;">
            <div class="space-50"></div>
            <div class="container text-center">
                <div class="row justify-content-md-center"  align="center">
                    <div class="col-md-12" style="margin-bottom:0px;margin-top:25px;">
                        <h2 class="title" style="width:100%;color:#fff;">
                            Pricing
                        </h2>
                    </div>
                    <div class="col-md-12" align="center">

                           <?php $products = \App\Product::where('status', '=', 'ACTIVE')->orderBy('priority', 'desc')->get();
                           foreach($products as $product) { ?>
                            <div class="product col-md-12">
                                @if(count($products) > 1)
                                    <h6>{{ $product->name }}</h6>
                                    <h7>{{ $product->description }}</h7>
                                @endif
                           <div class="card-deck"  style="margin-top:25px;margin-bottom:5px;">

                               <?php
                               $plans = getStripePlans($product->stripe_id);
                               foreach($plans->data as $plan) {  ?>
                               <div class="card" style="float:none;">
                                   <div class="card-header">
                                       <?php $product = \App\Product::where('stripe_id', '=', $plan->product)->first(); ?> {{ $plan->nickname }}
                                   </div>

                                   <div class="card-body">
                                       <h3 class="card-title" align="center">${{ $plan->amount/100 }} <span
                                                   style="font-size:50%;">/ month</span></h3>
                                       <p class="card-text">
                                           <?php $planrecord = \App\Plan::where('json->id', '=', $plan->id)->first(); ?>
                                            <?php if($planrecord !== null) { echo $planrecord->description; } ?>
                                       </p>
                                   </div>
                                   <div class="card-footer" align="center">
                                       @if (\Auth::user() && \Auth::user()->subscribed($product->name))
                                           <a href="/subscribe" class="btn btn-round btn-default ">Subscribed</a>
                                       @else
                                           <a href="/subscribe/{{$plan->id}}"
                                              class="btn btn-round bg-gradient-orange">Start Free Trial</a>
                                           @endif
                                           </a>
                                   </div>
                               </div>

                               <?php } ?>
                           </div>
                           </div>
                           <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
