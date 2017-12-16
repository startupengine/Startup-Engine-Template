<body class="index-page sidebar-collapse">
<div id="startup_engine_nav_container"></div>
<div class="wrapper">
    <div class="page-header page-header-small clear-filter" filter-color="black" id="heading">
        <div class="page-header-image" data-parallax="true" style="background-image:linear-gradient(rgba(0, 20, 119, 0.7), rgb(0, 0, 0)), url('{{$page->content()->heading->background}}');">
        </div>
        <div class="container">
            <div class="content-center" style="top:200px !important;">
                <h1 class="title text-center" style="padding-bottom:0px;margin:25px; margin-bottom:0px;">{{ $page->title }}</h1>
                @if($page->content()->heading->intro !== null)<h5>{{ $page->content()->heading->intro }}</h5>@endif
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="section" style="padding-top:50px;margin-top:-100px !important;background:none;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div id="articles" class="card-deck">
                        <todo-item
                                v-for="item in items"
                                v-bind:article="item"
                                v-bind:key="item.id"
                                v-bind:href="item.slug">
                        </todo-item>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>