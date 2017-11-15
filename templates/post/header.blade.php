<body class="index-page sidebar-collapse" id="articles-index">
<div id="startup_engine_nav_container"></div>
<div class="wrapper">
    <div class="page-header page-header-small">
        <div class="page-header-image" <?php if($post->image !== null) { echo "style=\"background-image:url('".$post->image."'); background-size:cover; \""; } ?>>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div id="articles" class="card-deck">
                    <div class="col-md-12" href="/content/post-with-video-2"><div class="card" style="box-shadow:0px -30px 60px rgba(0,0,0,0.2);"><div class="card-body">