<div class="wrapper" style="padding:0px;overflow: hidden;">
    <div class="page-header page-header-small" style="display: block;height:440px !important;">
        <div id="header-image" class="page-header-image " style="float:left; background-size: cover !important; background-position: bottom !important;background-color:#000;background:url({{$page->content()->heading->background}});">
        </div>
        <div class="container">
            <div class="content-center" style="padding:15px;">
                <h1 class="title">{!! $page->markdown($page->content()->heading->headline) !!}</h1>
                <h3 class="description text-center">{!! $page->markdown($page->content()->heading->intro) !!}</h3>
            </div>
        </div>
    </div>
    @if(isset($page->content()->features))
    <div class="section text-center" style="padding:0px 0px 50px 0px;">
        <div class="container">
            <div class="team">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{$page->content()->features->image}}"
                             id="laptop" class="img-raised" style="border-radius:10px;"/>
                    </div>
                    <div class="col-md-12" style="margin-bottom:0px;margin-top:25px;">
                        <h2 class="title" style="width:100%;color:#222;">
                            {{$page->content()->features->headline}}
                        </h2>
                    </div>
                    <div class="col-md-4">
                        <div class="" style="padding:15px;">
                            <img src="{{$page->content()->features->feature_1_image}}" alt="Thumbnail Image"
                                 class="icon-img rounded-circle img-fluid img-raised "/>
                            <h4 class="title">{{$page->content()->features->feature_1_title}}</h4>
                            <p class="description">{{$page->content()->features->feature_1_message}}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="" style="padding:15px;">
                            <img src="{{$page->content()->features->feature_2_image}}" alt="Thumbnail Image"
                                 class="icon-img rounded-circle img-fluid img-raised "/>
                            <h4 class="title">{{$page->content()->features->feature_2_title}}</h4>
                            <p class="description">{{$page->content()->features->feature_2_message}}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="" style="padding:15px;">
                            <img src="{{$page->content()->features->feature_3_image}}" alt="Thumbnail Image"
                                 class="icon-img rounded-circle img-fluid img-raised"/>
                            <h4 class="title">{{$page->content()->features->feature_3_title}}</h4>
                            <p class="description">{{$page->content()->features->feature_3_message}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(isset($page->content()->callout->text))
    <div class="section text-center bg-gradient-orange" style="color:#fff; padding:75px 25px 50px 25px;">
        <h3>{!! $page->markdown($page->content()->callout->text) !!}</h3>
    </div>
    @endif
    @if(isset($page->content()->pricing))
    <div class="section text-center" id="pricing" style="padding:0px 25px 65px 25px !important;">
        <div class="container text-center">
            <div class="row justify-content-md-center" align="center">
                <div class="col-md-12" style="margin-bottom:0px;margin-top:25px;">
                </div>
                <div class="col-md-12" align="center">
                    <div class="space-50"></div>
                    <h2 class="title">{{$page->content()->pricing->headline}}</h2>
                    <div class="space-50"></div>
                    <div class="card-deck">
                        <div class="card grow">
                            <div class="card-header">
                                {!! $page->markdown($page->content()->pricing->option_1_title) !!}
                            </div>

                            <div class="card-body">
                                <h3 class="card-title" align="center">${{$page->content()->pricing->option_1_cost}} <span style="font-size:50%;">/ month</span>
                                </h3>
                                {!! $page->markdown($page->content()->pricing->option_1_description) !!}
                            </div>
                            <div class="card-footer" align="center">
                                <a href="https://app.psychoanalytics.io/"
                                   class="btn btn-round btn-lg btn-neutral btn-simple">Start Free Trial</a>
                            </div>
                        </div>
                        <div class="card grow bg-gradient-purple">
                            <div class="card-header">
                                {!! $page->markdown($page->content()->pricing->option_2_title) !!}
                            </div>

                            <div class="card-body">
                                <h3 class="card-title" align="center">${!! $page->content()->pricing->option_2_cost !!} <span style="font-size:50%;">/ month</span>
                                </h3>
                                {!! $page->markdown($page->content()->pricing->option_2_description) !!}
                            </div>
                            <div class="card-footer" align="center">
                                <a href="https://app.psychoanalytics.io/"
                                   class="btn btn-round btn-lg"
                                   style="background:none;color:#444 !important;border:none !important;">Start Free Trial</a>
                            </div>
                        </div>
                        <div class="card grow">
                            <div class="card-header">
                                {!! $page->markdown($page->content()->pricing->option_3_title) !!}
                            </div>

                            <div class="card-body">
                                <h3 class="card-title" align="center">${!! $page->content()->pricing->option_3_cost !!} <span style="font-size:50%;">/ month</span>
                                </h3>
                                {!! $page->markdown($page->content()->pricing->option_3_description) !!}
                            </div>
                            <div class="card-footer" align="center">
                                <a href="https://app.psychoanalytics.io/"
                                   class="btn btn-round btn-lg btn-neutral btn-simple">Start Free Trial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if(isset($page->content()->call_to_action) && (isset($page->content()->call_to_action->headline) OR isset($page->content()->call_to_action->link) OR isset($page->content()->call_to_action->message)))
    <section class="section text-center" style="color:#555;">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-lg-12 text-center">
                    @if(isset($page->content()->call_to_action->headline))<h2>{!! $page->markdown($page->content()->call_to_action->headline) !!}</h2>@endif
                    @if(isset($page->content()->call_to_action->message))<h5 class="description">{!! $page->markdown($page->content()->call_to_action->message) !!}</h5>@endif
                    @if(isset($page->content()->call_to_action->button) && isset($page->content()->call_to_action->link))<a href="{{ $page->content()->call_to_action->link }}" class="btn btn-lg btn-primary btn-round bg-gradient-orange grow">{!! $page->content()->call_to_action->button !!}</a>@endif
                </div>
            </div>
        </div>
    </section>
    @endif
</div>