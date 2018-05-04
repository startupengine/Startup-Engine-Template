<body class="index-page sidebar-collapse" id="articles-index"
      style="background: linear-gradient(rgb(235, 242, 255), rgb(255, 255, 255));">

@if(View::exists('theme.templates.global.menu'))
    @include('theme.templates.global.menu')
@endif

<div id="startup_engine_nav_container"></div>
<div class="wrapper" style="background: #111;">

    <div class="page-header page-header-small"
         style="z-index:1 !important;">

        <div class="container">
            <div class="content-center" style="top:calc(50% - 0px);">
                <div>
                    <div align="center">
                        <h1 id="title">{{ $post->content()->heading->headline }}</h1>
                        @if($post->content()->heading->header_size == 'large')
                            <h2 class="excerpt"
                                style="font-weight:400 !important;font-size:175%;margin-bottom:25px;">{{ $post->content()->heading->excerpt }}</h2>
                        @endif
                        @if(isset($post->content()->heading->show_date) && $post->content()->heading->show_date == "on")
                            <h6 id="date">
                                @if(isset($post->content()->meta->featured) && $post->content()->meta->featured == "on")
                                    <span style="opacity:0.5; margin-right:10px;">FEATURED</span>
                                @endif
                                @if($post->content()->heading->show_date !== "off")
                                    Published {{ $post->published_at->diffForHumans() }}
                                @endif
                            </h6>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if(isset($tag) && isset($tag->content()->posts) && $tag->content()->posts->after_header !== null)
    {!! $tag->content()->posts->after_header !!}
@endif

<div class="section"
     style="padding-top:0px;margin-top:-25px; background:none;z-index:9 !important;min-height:100vh;box-shadow: none !important;">
    <div class="@if(isset($post->content()->body->width) && $post->content()->body->width == "full") container-fluid full-width @else container col-md-8 @endif"
         id="more">
        <div class="row">
            <div style="width:100%;">
                <div id="articles">
                    <div id="content-row">

                        <div class="card @if(isset($post->content()->body->width) && $post->content()->body->width == "full") full-width @endif"
                             style="text-align:center;box-shadow:0px -30px 30px rgba(0,0,100,0.1) !important;background:linear-gradient(180deg, #fff 90%, #fff0 100%) !important;"
                             id="contentBody">

                            <?php if($post->content() !== null && $post->content()->body->video !== null){ ?>
                            <?php $video = $post->content()->body->video; ?>
                            <?php $videotype = $post->videoType($video); ?>
                            <?php
                            if ($videotype == "youtube") {
                                $url = $video;
                                parse_str(parse_url($url, PHP_URL_QUERY), $array);
                                $video = $array['v'];
                            }
                            if ($videotype == "vimeo") {
                                $video = (int)substr(parse_url($video, PHP_URL_PATH), 1);
                            } ?>
                            <video class="afterglow" id="featuredvideo" width="960" height="450"
                                   @if($video == null) src="{{ $post->content()->body->video }}" @endif
                                   @if($video !== null) data-{{ $videotype }}-id="{{ $video }}" @endif
                                   @if($post->content()->body->image !== null) poster="{{ $post->content()->body->image }}" @endif >

                                @if($videotype !== "youtube" && $videotype !== "vimeo")
                                    <source type="video/mp4" src="{{ $post->content()->body->video }}"/>
                                @endif

                            </video>
                            <?php } ?>

                            @if(count($post->tagNames()) > 0)
                                <div class="card-header" style="background:#fff;border-radius:0px;padding:1.25em !important;border-bottom:2px solid rgb(235, 242, 255);">
                                    <?php $tagCount = 1; ?>
                                    <div class="badge hiddenOnMobile"
                                         style="background: #fff;border-color: #fff;color: #000;opacity: 0.7;"><i
                                                style="font-size:80%;" class="fa fa-tags"></i>&nbsp; Tags
                                    </div>
                                    @foreach($post->tagNames() as $tagName)
                                        @if($tagCount <= 3)
                                            <a href="/content/tag/{{ strtolower($tagName) }}?post_type=help"
                                               class="badge"><span style="opacity:0.5;">#</span> {{ $tagName }}</a>
                                        @endif
                                        <?php $tagCount = $tagCount + 1; ?>
                                    @endforeach
                                </div>
                            @endif
                            @if($post->content() !== null && ($post->content()->body->image !== null OR $post->content()->body->video !== null OR $post->content()->heading->excerpt !== null OR $post->content()->body->body !== null))
                                <div class="card-body @if(isset($post->content()->body->width) && $post->content()->body->width == "full") container col-md-7 @endif"
                                     id="content" style="min-height:50px;">
                                    <?php if($post->content()->heading->excerpt !== null && $post->content()->heading->header_size !== 'large') { ?>
                                    <h5 class="description excerpt">{{ $post->content()->heading->excerpt }}</h5>
                                    <?php } ?>
                                    @if($post->content()->heading->background !== null)
                                            <div style="padding:15px 15px 0px 15px;"><div style="background:url({{ $post->content()->heading->background }});background-position:center;background-size:cover;margin-top:0px !important;border-radius:5px;"><img src="{{ $post->content()->heading->background }}" style="max-height:350px;visibility:hidden;" /></div></div>
                                    @endif
                                    <?php if($post->content() !== null && isset($post->content()->body->body)) { ?>
                                    {!!  $post->markdown($post->content()->body->body) !!}
                                    <?php } ?>
                                </div>

                                @if($post->primaryTag() !== null && $post->primaryTag() !== null && $post->primaryTag()->content()->posts->show_author_info == "yes" && $post->user() !== null)
                                <div class="card-footer row row-eq-height" style="background: none;border-bottom: none;border-radius:0px;border: none !important;" align="center">
                                    <div class="col-md-12">
                                        <div id="author" class="<?php if(isset($post->content()->body->width) && $post->content()->body->width== 'full' && $post->user()->avatar !== null) { ?>col-md-8 filled <?php } else { ?> col-md-12 <?php } ?>" style="padding: 25px;margin-top: 25px;border-radius: 4px;border:none;">
                                            @if($post->user() !== null)
                                            <img @if($post->user()->avatar == "users/default.png") src="/images/avatar.png" @else src="{{ $post->user()->avatar }}" @endif style="width:50px;height:50px;margin:10px;float: none;border-radius:25px;" />
                                            @endif
                                            <strong id="name">{{ $post->user()->name }}</strong>
                                            <?php /*<h6 style="opacity: 0.5;">Editor In Chief</h6>*/ ?>
                                            <?php /*<a href="/author/***" class="btn btn-secondary btn-round">Read more from Aaron</div> */?>
                                        </div>
                                    </div>
                                </div>
                                @endif
@endif