<body class="index-page sidebar-collapse">
<div id="startup_engine_nav_container"></div>
<div class="wrapper">
    <div class="page-header page-header-small clear-filter" filter-color="black" id="heading">
        <div class="page-header-image" data-parallax="true">
        </div>
        <div class="container">
            <div class="content-center" style="top:200px !important;">
                <h1 class="title text-center" style="padding-bottom: 25px;margin:25px;">{{ $page->title }}</h1>
                @if($page->excerpt !== null)<h5>{{ $page->excerpt }}</h5>@endif
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
                                v-bind:todo="item"
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