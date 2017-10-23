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
        template: '<div style="margin-top:300px;"><h1>@{{ todo.title }}</h1><h4>@{{ todo.meta_description }}</h4></div>'
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
<div class="section bg-gradient-blue" style="box-shadow:0px 0px 60px rgba(0,0,0,0.1);color:#fff;position:absolute;bottom:-330px;left:0px;width:100%;">
    <div class="container text-center">
        <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-8">
                <h2 class="title">Ready to get started?</h2>
                <h5 class="description" style="color:#fff;font-weight:300;margin-bottom:35px;">Get up and running in 5 minutes or less.</h5>
                <a href="/get-started" class="btn bg-gradient-orange btn-lg" onclick="mixpanel.track('cta');"><i class="now-ui-icons arrows-1_share-66"></i> Get Started</a>
                <a href="/get-started" class="btn btn-neutral btn-lg" style="background:#fff;color:#222 !important;">View the Docs</a>
            </div>
        </div>
    </div>
</div>
</body>