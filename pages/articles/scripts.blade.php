<script>
    Vue.component('todo-item', {
        props: ['todo'],
        template: '<div class="col-sm-4"><a class="card-link" v-bind:href="todo.slug"><div class="card"><img class="card-img-top" v-bind:src="todo.image"><div class="card-body"><h4 class="card-title" align="center">@{{ todo.title }}</h4><p class="card-text">@{{ todo.meta_description }}</p></div><div class="card-footer" align="center">Read More</div></div></a></div>'
    });
    var app7 = new Vue({
        el: '#articles',
        data: {
            items: null
        },
        created: function () {
            var _this = this;
            $.getJSON('/api/browse?type=posts&category=articles', function (json) {
                _this.items = json;
            });
        }
    });
</script>