<body class="index-page sidebar-collapse">
<div id="startup_engine_nav_container"></div>
<div class="wrapper">
    <div class="main" >
        <div  class="section particles-js bg-gradient-purple" style="min-height:100vh;">
            <div class="space-50"></div>
            <div class="container text-center">
                <div class="row justify-content-md-center"  align="center">
                    <div class="col-md-12" style="margin-bottom:0px;margin-top:25px;">
                        <h2 class="title" style="width:100%;color:#fff;">
                            Pricing
                        </h2>
                    </div>
                    <div class="col-md-12" align="center">
                       <div class="card-deck">
                           <div class="card">
                               <div class="card-header">
                                   Free
                               </div>

                               <div class="card-body">
                                   <h3 class="card-title" align="center">$0 <span style="font-size:50%;">/ month</span></h3>
                                   <p class="card-text">1 User</p>
                                   <p class="card-text">100 Research Items</p>
                                   <p class="card-text">No web analytics</p>
                               </div>
                               <div class="card-footer" align="center">
                                   <a href="https://app.psychoanalytics.io/" class="btn btn-round bg-gradient-orange">Start Free Trial</a>
                               </div>
                           </div>
                           <div class="card">
                               <div class="card-header">
                                   Startup
                               </div>

                               <div class="card-body">
                                   <h3 class="card-title" align="center">$99 <span style="font-size:50%;">/ month</span></h3>
                                   <p class="card-text">1 User</p>
                                   <p class="card-text">500 Research Items</p>
                                   <p class="card-text">250,000 web analytic events</p>
                               </div>
                               <div class="card-footer" align="center">
                                   <a href="https://app.psychoanalytics.io/" class="btn btn-round bg-gradient-orange">Start Free Trial</a>
                               </div>
                           </div>
                           <div class="card">
                               <div class="card-header">
                                   Enterprise
                               </div>

                               <div class="card-body">
                                   <h3 class="card-title" align="center">$999 <span style="font-size:50%;">/ month</span></h3>
                                   <p class="card-text">1 User</p>
                                   <p class="card-text">Unlimited Research Items</p>
                                   <p class="card-text">1,000,000+ web analytic events</p>
                               </div>
                               <div class="card-footer" align="center">
                                   <a href="https://app.psychoanalytics.io/" class="btn btn-round bg-gradient-orange">Start Free Trial</a>
                               </div>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start of Text Cycling -->
<script>
    var divs = $('div[id^="content-"]').hide(),
        i = 0;

    (function cycle() {

        divs.eq(i).fadeIn(400)
            .delay(1500)
            .fadeOut(400, cycle);

        i = ++i % divs.length;

    })();
</script>
<!-- Start of ParticleJS -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
    particlesJS("particles-js", {"particles":{"number":{"value":80,"density":{"enable":true,"value_area":800}},"color":{"value":"#001eff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.93415509907748635,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#00ff3c","opacity":0.90517838682439088,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});
</script>