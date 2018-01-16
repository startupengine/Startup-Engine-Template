<body class="index-page sidebar-collapse" id="articles-index">

@if(View::exists('theme.templates.global.menu'))
    @include('theme.templates.global.menu')
@endif

<div id="startup_engine_nav_container"></div>
<div class="wrapper" style="background:#000;">
    <div class="page-header @if(isset($post->content()->heading->header_size) && $post->content()->heading->header_size == 'small') page-header-small @endif">
        <div class="page-header-image" <?php if ($post->content()->heading->background !== null) {
            echo "style=\"background-image:url('" . $post->content()->heading->background . "'); background-size:cover;z-index: 0;opacity: 0.3; \"";
        } ?>>
        </div>
        <div class="container">
            <div class="content-center">
                <div style="padding-top:75px;">
                    <div align="center">
                        <h1 id="title">{{ $post->content()->heading->headline }}</h1>
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
                        @if(count($post->tagNames()) > 0)
                            <div style="margin-bottom: 20px;"><a href="/content/tag/{{ strtolower($post->tagNames()[0]) }}" class="btn btn-simple btn-round">{{ $post->tagNames()[0] }}</a></div>
                        @endif
                        @if($post->content()->body->video == null OR $post->content()->heading->button !== null)
                        <a class="btn btn-lg btn-round btn-simple" id="engage" href="javascript:void(0)"
                           onclick="$('#more').ScrollTo();">@if($post->content()->heading->button !== null) {{ $post->content()->heading->button }} @else
                                Read Article @endif</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section" style="padding-top:25px;@if($post->content()->body->body == null && $post->content()->body->video !== null) margin-top:-155px !important; @else margin-top:-75px !important; @endif background:none;z-index:5 !important;">
    <div class="container" id="more">
        <div class="row">
            <div style="width:100%;">
                <div id="articles">
                    <div id="content-row">

                        <div class="card" style="box-shadow:0px -30px 60px rgba(0,0,0,0.2);" id="contentBody">
                            <?php if($post->content() !== null && $post->content()->body->image !== null && $post->content()->body->video == null){ ?>
                            <div id="featuredImage"
                                 style="background:url('{{ $post->content()->body->image }}');"></div>
                            <?php } ?>

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
                                        <source type="video/mp4" src="{{ $post->content()->body->video }}" />
                                    @endif

                            </video>
                            <?php } ?>

                            @if($post->content() !== null && ($post->content()->body->image !== null OR $post->content()->body->video !== null OR $post->content()->heading->excerpt !== null OR $post->content()->body->body !== null))
                                <div class="card-body" id="content" style="min-height:50px;">
                                    <?php if($post->content()->heading->excerpt !== null) { ?>
                                    <h5 class="description excerpt">{{ $post->content()->heading->excerpt }}</h5>
                                    <?php } ?>
                                    <?php if($post->content() !== null && isset($post->content()->body->body)) { ?>
                                    {!!  $post->markdown($post->content()->body->body) !!}
                                    <?php } ?>
                                </div>
@endif