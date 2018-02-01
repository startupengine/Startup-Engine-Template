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
    if(typeof(pageNumber) == 'undefined') {
        pageNumber = 1;
    }
    if(typeof(pageSize) == 'undefined') {
        pageSize = 30;
    }

    <?php $search = (app('request')->input('s')); ?>
    <?php if($search !== null) { ?>
        var search = "&s=<?php echo $search; ?>";
    <?php }  else { ?>
        var search = "";
    <?php } ?>
    <?php if(isset($tag)) { ?>
        var tags = '&tag[]=<?php echo $tag; ?>';
    <?php } else { ?>
        var tags = "&tag[]=help";
    <?php } ?>

    var queryPath = '/api/content/items?page[number]='+ pageNumber +'&page[size]='+ pageSize + tags + search;

    Vue.component('help-item', {
        props: ['article'],
        template:
        '<div class="col-md-4" style="margin-top:25px;">' +
        '<a class="card-link" v-bind:href="article.slug" onclick="window.location.href = $(this).attr(\'href\');">' +
        '<div class="card" style="height:100%;">' +
        '<div v-if="article.content.meta && article.content.meta.featured == \'on\' && article.content.meta.message == null" class="card-header featured" ><i class="fas fa-star" ></i>  Featured</div>' +
        '<div v-if="article.content.meta && article.content.meta.featured == \'on\' && article.content.meta.message !== null" class="card-header featured" >@{{article.content.meta.message}}</div>' +
        '<div v-if="article.content.heading.background !== null && article.content.meta.featured == \'on\'" :style=\'{ backgroundImage: `url(${article.content.heading.background})` }\' class="image-container"></div>' +
        '<div v-else-if="article.content.heading.background !== null && article.content.meta.message !== null" :style=\'{ backgroundImage: `url(${article.content.heading.background})` }\' class="image-container"></div>' +
        '<div v-else :style=\'{ backgroundImage: `url(${article.content.heading.background})` }\' class="image-container"></div>' +
        '<div class="card-body">' +
        '<h4 class="card-title" align="center">@{{ article.content.heading.headline }}</h4>' +
        '<p v-if="article.content.heading.excerpt !== null">@{{article.content.heading.excerpt}}</p>' +
        '<p></p>'+
        '<div class="btn btn-link btn-lg btn-block"><span style="border-radius:25px;border:1px solid #eee; padding:5px 20px;">Continue Reading  <i class="fas fa-arrow-right fa-xs"></i></span></div>' +
        '</div>' +
        '</div>' +
        '</a>' +
        '</div>'
    });

    <?php if(isset($tag)) { $element = "#page"; } else { $element = "#articles"; } ?>

    var app = new Vue({
        el: '<?php echo $element; ?>',
        data: {
            items: null,
            resource_url: queryPath
        },
        components: {
            VPaginator: VuePaginator
        },
        methods: {
            updateResource(data){
                this.items = data
            }
        },
        created: function getContent() {
            var _this = this;
            $.getJSON(queryPath, function (json) {
                _this.items = json.data;
            });
        }
    });
</script>
<?php
if(isset($tag)) {
    $tagContent = \App\Tag::where('slug', '=', $tag)->first();
} else {
    $tagContent = null;
} ?>

@if($page->content()->code->scripts !== null)
    {!! $page->content()->code->scripts  !!}
@endif