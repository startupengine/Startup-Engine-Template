<body class="index-page sidebar-collapse">
<div id="startup_engine_nav_container"></div>
<div class="wrapper">
    <div class="page-header page-header-small clear-filter" filter-color="black">
        <div class="page-header-image"
             @if($page->content()->heading->background !== null) style="background-image:url('{{$page->content()->heading->background}}'); background-size:cover;z-index: 0;opacity: 0.3;" @endif></div>
        <div class="container">
            <div class="content-center">
                @if($page->content()->heading->headline !== null)
                    <h1 class="title text-center">{{ $page->content()->heading->headline }}</h1>
                @endif
                @if($page->content()->heading->intro !== null)
                    <h3 class="description text-center"
                        v-if="page.json.heading.intro !== null">{{ $page->content()->heading->intro }}</h3>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="section" style="padding-bottom:0px;padding-top:50px;margin-top:-100px !important;background:none;">
        <div class="container">
            <div id="articles">
                <div class="row">
                    <div class="@if($page->content()->about->headline !== null) col-md-8 @else col-md-12 @endif">
                        <todo-item
                                v-for="item in items"
                                v-bind:article="item"
                                v-bind:key="item.id"
                                v-bind:href="item.slug">
                        </todo-item>
                    </div>
                    @if($page->content()->about->headline !== null)
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="card" style="margin-top:25px;">
                                    @if($page->content()->about->headline !==null OR $page->content()->about->description !== null)
                                        <div class="card-body">
                                            @if($page->content()->about->headline !== null)
                                                <p><strong>{{ $page->content()->about->headline }}</strong></p>
                                            @endif
                                            @if($page->content()->about->description !== null)
                                                <p>{{ $page->content()->about->description }}</p>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                                @if($page->content()->sidebar->html!== null)
                                    @if($page->content()->sidebar->html !== null)
                                        <?php echo $page->markdown($page->content()->sidebar->html); ?>
                                    @endif
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</body>