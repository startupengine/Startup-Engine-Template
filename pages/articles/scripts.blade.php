<script>
    Vue.component('todo-item', {
        props: ['todo'],
        template: '<div class="col-sm-4" style="margin-top:25px;"><a class="card-link" v-bind:href="todo.slug"><div class="card" style="height:100%;">' +
        "<div :style='{ backgroundImage: `url(${todo.content.body.image})` }' class='image-container'></div>" +
        '<div class="card-body"><h4 class="card-title" align="center">@{{ todo.title }}</h4><p class="card-text">@{{ todo.content.heading.headline }}</p></div><div class="card-footer" align="center">Read More</div></div></a></div>'
    });
    var app7 = new Vue({
        el: '#articles',
        data: {
            items: null
        },
        created: function () {
            var _this = this;
            $.getJSON('/api/items?type=posts&limit=21', function (json) {
                _this.items = json;
            });
        }
    });
</script>