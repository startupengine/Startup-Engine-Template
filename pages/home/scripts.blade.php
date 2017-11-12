<script>
    var slug = 'home';

    Vue.component('heading', {
        props: ['page'],
        template: '<div>' +
        '<div class="col-md-12" style="margin-bottom:0px;margin-top:25px;">' +
        '<h2 class="title" style="width:100%;color:#fff;">@{{ page.json.heading.headline }}</h2>' +
        '<a href="javascript:void(0)" onclick="scrollToMore()" class="btn btn-round btn-neutral btn-simple"> @{{ page.json.heading.button }}</a>' +
        '</div>' +
        '</div>'
    });
    Vue.component('feature1', {
        props: ['page'],
        template:
        '<div class="row">'+
        '<div class="col-md-6">' +
        '<h2 style="margin-bottom:5px;">@{{ page.json.feature1.headline }}</h2>' +
        '<h5 class="description" style="text-align:left;color:#000;">@{{ page.json.feature1.message }}</h5>' +
        '</div>'+
        '<div class="col-md-6">'+
        '<img class=" rounded" :src="page.json.feature1.image" />'+
        '</div>'+
        '</div>'
    });
    Vue.component('feature2', {
        props: ['page'],
        template:
        '<div class="row">'+
        '<div class="col-md-6">'+
        '<img class=" rounded" :src="page.json.feature2.image" />'+
        '</div>'+
        '<div class="col-md-6">' +
        '<h2 style="margin-bottom:5px;">@{{ page.json.feature2.headline }}</h2>' +
        '<h5 class="description" style="text-align:left;color:#000;">@{{ page.json.feature2.message }}</h5>' +
        '</div>'+
        '</div>'
    });
    Vue.component('feature3', {
        props: ['page'],
        template:
        '<div class="row">'+
            '<div class="col-md-6">' +
                '<h2 style="margin-bottom:5px;">@{{ page.json.feature3.headline }}</h2>' +
                '<h5 class="description" style="text-align:left;color:#000;">@{{ page.json.feature3.message }}</h5>' +
            '</div>'+
            '<div class="col-md-6">'+
                '<img class=" rounded" :src="page.json.feature3.image" />'+
            '</div>'+
        '</div>'
    });
    var page = null;
    var feature1 = new Vue({
        el: '.wrapper',
        data: {
            views: ['heading', 'feature1', 'feature1', 'feature3'],
            items: null
        },
        created: function () {
            var _this = this;
            $.getJSON('/api/page/' + slug + '/random', function (json) {
                _this.items = {"items": json};
                page = {"items": json};
                console.log(page);
            });
        }
    });
</script>