<body class="index-page sidebar-collapse">
<div class="wrapper" align="center">
    <div class="main">
        <heading
                v-for="item in items"
                v-bind:page="item"
                v-bind:key="item.id"
                v-bind:href="item.slug">
        </heading>
        <img src="https://px6vg4ekvl21gtxs836x5jyx-wpengine.netdna-ssl.com/wp-content/uploads/2017/03/hero-home-1.png"
             style="z-index:99999;display:block;margin-top:-650px; max-height:600px; width:auto;margin-bottom:50px;"/>
    </div>
    <div class="card" id="more"
         style="max-width:90%;background:#fff;box-shadow:0px 0px 50px rgba(0,0,200,0.10);border-radius:10px;margin-bottom:50px;margin-top:-50px;">
        <div class="card-body" style="min-height:150px;">

            <h5 style="padding-bottom:50px;border-bottom:1px solid rgba(0,0,0,0.1);">{{ $page->content()->heading->intro }}</h5>



        <?php $features = \App\Post::where('post_type', '=', 'feature')->where('status','=','PUBLISHED')->limit(4)->get(); ?>
                @foreach($features as $feature)
                    <div class="card" style="box-shadow:none;">
                        @if($feature->content()->heading->icon !== null)
                            <img src="{{ $feature->content()->heading->icon }}"
                                 style="max-width:50px;margin-bottom:30px;"/>
                        @endif
                        <h6>{{ $feature->content()->heading->headline }}</h6>
                        <p>{{ $feature->content()->heading->excerpt }}</p>
                    </div>
                @endforeach
        </div>
        <div style="margin:0px 50px 50px 50px;padding-top:50px;">
            <a href="/features" class="btn btn-secondary-outline btn-simple btn-round">Explore
                All Features
                &nbsp;<i class="fa fa-caret-right"></i></a>
        </div>
    </div>


    <?php $testimonials = \App\Post::where('post_type', '=', 'quote')->where('status', '=', 'PUBLISHED')->orderBy('created_at')->limit(3)->get(); ?>
    @if($testimonials->isEmpty() !== true)
        <div class="section bg-gradient-blue" style="padding:0px;" id="testimonials">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel"
                 style="height:auto;">
                <div class="carousel-inner" style="box-shadow: none;">
                    <?php $count = 0; ?>
                    @foreach($testimonials as $testimonial)
                        <?php $count = $count + 1; ?>
                        <div class="carousel-item @if($count = 1) active  @endif align-middle">
                            <h5>{{ $testimonial->content()->body->headline }}</h5>
                            <img src="{{ $testimonial->content()->body->image }}"
                                 style="max-width:76px;display:inline;border-radius:38px;"/>
                            <p style="width:70%;max-width:500px;margin:50px;">{{ $testimonial->content()->body->body }}</p>
                        </div>
                    @endforeach
                </div>
                @if($count > 1)
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                @endif
            </div>
        </div>
    @endif
    <section style="height:100%;min-height:80vh;max-height:80vh;z-index:999;display:block;">
        <div id="content-menu"
             style="width:35%;background:linear-gradient(180deg, rgba(0,100,200,0.05) 50%,#fff 100%);height:100%;float:left;display:flex !important;">
            <div style="padding:50px;width:100%;height:100%;" class="align-middle">
                <div class="list-group" style="text-align:left;">
                    <a href="/articles"
                       class="list-group-item list-group-item-action flex-column align-items-start active">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1"><i class="fa fa-newspaper"></i> &nbsp;Articles</h6>
                        </div>
                    </a>
                    <a href="/resources" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1"><i class="fa fa-book "></i> &nbsp;Resources</h6>
                        </div>
                    </a>
                    <a href="/articles" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1"><i class="fa fa-bullhorn "></i> &nbsp;<span class="hiddenOnMobile">Announcements</span><span
                                        class="hiddenOnDesktop">News</span></h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div id="content-container"
             style="z-index:999;padding:50px;width:65%;min-height:500px;height:100%;float:left;display:flex !important;background:none;">
            <?php $articles = \App\Post::where('post_type', '=', 'post')->where('status', '=', 'PUBLISHED')->limit(5)->get(); ?>

            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators" style="z-index:999 !important;bottom:20px !important;pointer-events: none !important;">
                    <?php $count = 0; ?>
                    @foreach($articles as $article)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $count }}"
                            @if($count = 0 )class="active" @endif></li>
                        <?php $count = $count + 1; ?>
                    @endforeach
                </ol>
                <div class="carousel-inner" style="min-height: 500px;border-radius: 5px !important;box-shadow: none;padding-bottom: 0px !important;box-shadow:none;">
                    <?php $articles = \App\Post::where('post_type', '=', 'post')->where('status', '=', 'PUBLISHED')->get(); ?>
                    <?php $count = 0; ?>
                    @foreach($articles as $article)
                        <?php $count = $count + 1; ?>
                        <div class="carousel-item @if($count == 1) active @endif">
                            <div class="card bg-dark text-white" style="background-color:#000 !important;overflow:hidden !important;max-height:500px !important;opacity:1;" align="center">
                                <h5 class="card-title">{{ $article->content()->heading->headline }}</h5>
                                <p class="card-text"
                                   style="margin-top:75px;max-width:500px;color:#fff !important;">{{ $article->content()->heading->excerpt }}</p>
                                <a href="/content/{{ $article->slug }}"
                                   class="btn btn-simple btn-neutral btn-round" style="z-index:9999 !important;margin-top:0px;width:150px;position:absolute;bottom:50px;left:calc(50% - 75px);">Read More &nbsp;<i
                                            class="fa fa-caret-right"></i></a>
                                <div class="card-img-overlay align-middle" style="padding:0px;z-index:0 !important;">
                                    <div style="display:block !important;background-color:#000;opacity:0.33;background-image:url('{{ $article->content()->heading->background }}');background-size:cover;width:100%;height:100%;" ></div>
                                </div>
                                <img src="{{ $article->content()->heading->background }}" class="card-img img-fluid"
                                     style="opacity:0;height:500px !important;width:100% !important;visibility:hidden !important;" />
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>
    </section>
    <calltoaction
            v-for="item in items"
            v-bind:page="item"
            v-bind:key="item.id"
            v-bind:href="item.slug">
    </calltoaction>

</div>