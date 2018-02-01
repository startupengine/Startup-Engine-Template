<div class="wrapper">
    <div class="section" style="padding-top:25px;margin-top:-100px;background:none;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12" id="articles">
                    <help-item
                            v-for="item in items"
                            v-bind:article="item"
                            v-bind:key="item.id"
                            v-bind:href="item.slug" >
                    </help-item>
                </div>
                <?php $search = (app('request')->input('s')); ?>
                @if(isset($page->content()->content->html) && $search == null)
                    <div class="col-lg-12 col-md-12">
                        {!! $page->content()->content->html !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>