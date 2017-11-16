</div>
</div>
</div>
</div>
</div>
</div>
<script>
    var slug = /[^/]*$/.exec(window.location)[0];
    Vue.component('todo-item', {
        props: ['todo'],
        template: '<div><h1>@{{ todo.title }}</h1><h4>@{{ todo.meta_description }}</h4></div>'
    });
    console.log(slug);
    var app7 = new Vue({
        el: '#articles',
        data: {
            items: null
        },
        created: function () {
            var _this = this;
            $.getJSON('/api/item?type=posts&slug=' + slug, function (json) {
                _this.items = json;
            });
        }
    });

</script>
</div>
</body>