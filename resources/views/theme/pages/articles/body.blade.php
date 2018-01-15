<body class="index-page sidebar-collapse" style="background:linear-gradient(180deg,#ebf2ff,#fff);">
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
                    <div class="@if($page->content()->about->headline !== null) col-md-8 @else col-md-12 @endif row row-eq-height" style="margin:0px;">
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
                                        <div class="card-body" style="min-height:50px;">
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

<script>
    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    };

    var pageNumber = getUrlParameter('page[number]');
    var pageSize = getUrlParameter('page[size]');
    console.log('pageSize = ' + pageSize);

    Vue.component('todo-item', {
        props: ['article'],
        template:
        '<div class="col-md-6" style="margin-top:25px;">' +
        '<a class="card-link" v-bind:href="article.slug" onclick="window.location.href = $(this).attr(\'href\');">' +
        '<div class="card" style="height:100%;">' +
        '<div v-if="article.content.meta && article.content.meta.featured == \'on\' && article.content.meta.message == null" class="card-header featured" ><i class="fas fa-star" ></i> &nbsp;Featured</div>' +
        '<div v-if="article.content.meta && article.content.meta.featured == \'on\' && article.content.meta.message !== null" class="card-header featured" >{{article.content.meta.message}}</div>' +
        '<div v-if="article.content.heading.background !== null && article.content.meta.featured == \'on\'" :style=\'{ backgroundImage: `url(${article.content.heading.background})` }\' class="image-container"></div>' +
        '<div v-else-if="article.content.heading.background !== null && article.content.meta.message !== null" :style=\'{ backgroundImage: `url(${article.content.heading.background})` }\' class="image-container"></div>' +
        '<div v-else :style=\'{ backgroundImage: `url(${article.content.heading.background})` }\' class="image-container"></div>' +
        '<div class="card-body">' +
        '<h4 class="card-title" align="center">{{ article.content.heading.headline }}</h4>' +
        '<p v-if="article.content.heading.excerpt !== null">{{article.content.heading.excerpt}}</p>' +
        '<p></p>'+
        '<div class="btn btn-link btn-lg btn-block"><span style="border-radius:25px;border:1px solid #eee; padding:5px 20px;">Continue Reading &nbsp;<i class="fas fa-arrow-right fa-xs"></i></span></div>' +
        '</div>' +
        '</div>' +
        '</a>' +
        '</div>'
    });
    var app = new Vue({
        el: '#articles',
        data: {
            items: null
        },
        created: function () {
            var _this = this;
            $.getJSON('/api/items?type=posts&page[number]='+ pageNumber +'&page[size]='+ pageSize, function (json) {
                _this.items = json.data;
            });
        }
    });
</script>
</body>