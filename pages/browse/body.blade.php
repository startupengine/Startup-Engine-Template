<body class="index-page sidebar-collapse">
<div id="startup_engine_nav_container"></div>
<div class="wrapper">
    <div class="page-header page-header-small clear-filter" filter-color="black">
        <div class="page-header-image" data-parallax="true" style="background-image:url('https://images.unsplash.com/photo-1501954378833-0ee4020fd660?dpr=1&auto=compress,format&fit=crop&w=2978&h=&q=80&cs=tinysrgb&crop=');">
        </div>
        <div class="container">
            <div class="content-center" style="top:200px !important;">
                <div id="heading">
                    <category
                            v-for="item in categories"
                            v-bind:category="item"
                            v-bind:key="item.id">
                    </category>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="section" style="padding-top:25px;margin-top:-100px !important;background:none;">
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