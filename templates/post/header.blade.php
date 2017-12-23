<body class="index-page sidebar-collapse" id="articles-index">

@if(View::exists('theme.templates.global.menu'))
    @include('theme.templates.global.menu')
@endif

<div id="startup_engine_nav_container"></div>
<div class="wrapper" style="background:#000;">
    <div class="page-header page-header-small">
        <div class="page-header-image" <?php if ($post->content()->heading->background !== null) {
            echo "style=\"background-image:url('" . $post->content()->heading->background . "'); background-size:cover;z-index: 0;opacity: 0.3; \"";
        } ?>>
        </div>
        <div class="container">
            <div class="content-center">
                <div style="padding-top:140px;">
                    <div align="center">
                        <h1>{{ $post->content()->heading->headline }}</h1>
                        <a class="btn btn-lg btn-round btn-simple" id="engage" href="javascript:void(0)"
                           onclick="scrollToMore()">@if($post->content()->heading->button !== null){{ $post->content()->heading->button }}@else
                                Read Article @endif</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section" style="padding-top:25px;margin-top:-75px !important;background:none;">
    <div class="container" id="more">
        <div class="row">
            <div>
                <div id="articles" >
                    <div id="content-row">

                        <div class="card" style="box-shadow:0px -30px 60px rgba(0,0,0,0.2);">
                            <?php if($post->content() !== null && $post->content()->body->image !== null && $post->content()->body->video !== null){ ?>
                                <div style="width:100%; min-height:600px; background:url('{{ $post->content()->body->image }}'); background-size:cover; border-radius:4px;background-position:center center;"></div>
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
                                }
                            ?>
                            <video class="afterglow" id="featuredvideo" width="960" height="450" data-{{ $videotype }}-id="{{ $video }}" @if($post->content()->body->image !== null) poster="{{ $post->content()->body->image }}" @endif ></video>
                            <?php } ?>


                            @if($post->content() !== null && ($post->content()->body->image !== null OR $post->content()->body->video !== null OR $post->content()->heading->excerpt !== null OR $post->content()->body->body !== null))
                                <div class="card-body" id="content">
                                    <?php if($post->content()->heading->excerpt !== null) { ?>
                                        <h5 class="description excerpt">{{ $post->content()->heading->excerpt }}</h5>
                                    <?php } ?>
                                    <?php if($post->content() !== null && isset($post->content()->body->body)) { ?>
                                        {!!  $post->markdown($post->content()->body->body) !!}
                                    <?php } ?>
                                </div>
                            @endif