<body class="index-page sidebar-collapse">
<div id="startup_engine_nav_container"></div>
<div class="wrapper">
    <div class="page-header page-header-small">
        <div class="page-header-image" data-parallax="true" style="background-image:url('https://images.unsplash.com/photo-1506704952906-12288ad0a78e?dpr=1&auto=format&fit=crop&w=2850&q=60&cs=tinysrgb');">
        </div>
        <div class="container">
            <div class="content-center" style="top:200px !important;">
                <h1 class="title text-center" style="padding-bottom: 25px;border-bottom: #fff solid 5px;margin:25px;">The Launchpad</h1>
                <h4 class="title text-center" style="font-weight:400 !important;">A blog about starting up & taking off.</h4>
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