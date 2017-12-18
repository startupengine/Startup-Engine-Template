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
                <div id="articles" style="padding-top:140px;">
                    <todo-item
                            v-for="item in items"
                            v-bind:todo="item"
                            v-bind:key="item.id"
                            v-bind:href="item.slug">
                    </todo-item>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section" style="padding-top:25px;margin-top:-75px !important;background:none;">
    <div class="container" id="more">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div id="articles" class="card-deck">
                    <div class="col-md-12" href="/content/post-with-video-2">
                        <div class="card" style="box-shadow:0px -30px 60px rgba(0,0,0,0.2);">
                            <div class="card-body" id="content">
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
                                    <div data-type="{{ $videotype }}" data-video-id="{{ $video }}"></div>
                                <?php } ?>