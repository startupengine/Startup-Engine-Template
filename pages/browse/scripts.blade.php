<script>
    var url_string = window.location;
    var url = new URL(url_string);
    var input = url.searchParams.get("category");
    console.log(input);
    Vue.component('todo-item', {
        props: ['todo'],
        template: '<div class="col-sm-4"><a class="card-link" v-bind:href="todo.slug"><div class="card"><img class="card-img-top" v-bind:src="todo.image"><div class="card-body"><h4 class="card-title" align="center">@{{ todo.title }}</h4><p class="card-text">@{{ todo.meta_description }}</p></div><div class="card-footer" align="center">Read More</div></div></a></div>'
    });
    Vue.component('category', {
        props: ['category'],
        template: '<div><h1 class="title">@{{ category.name }}</h1><h4 class="title">@{{ category.description }}</h4></div>'
    });
    var heading = new Vue({
        el: '#heading',
        data: {
            categories: null
        },
        created: function () {
            var _this = this;
            $.getJSON('/api/item?type=categories&slug=' + input, function (json) {
                _this.categories = json;
            });
        }
    });
    var articles = new Vue({
        el: '#articles',
        data: {
            items: null
        },
        created: function () {
            var _this = this;
            $.getJSON('/api/browse?type=posts&category=' + input, function (json) {
                _this.items = json;
            });
        }
    });
</script>