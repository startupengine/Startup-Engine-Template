<div class="wrapper">
    <div class="section" style="padding-top:25px;margin-top:-100px;background:none;">
        <div class="container">
            <div class="row">
                <?php $search = (app('request')->input('s')); ?>
                @if($page->content()->code->header !== null && $search == null)
                    {!! $page->content()->code->header  !!}
                @endif
                <div class="row row-eq-height" id="articles">
                    <help-item
                            v-for="item in items"
                            v-bind:article="item"
                            v-bind:key="item.id"
                            v-bind:href="item.slug" >
                    </help-item>
                    <div class="col-md-12" style="width:100%;padding:25px 0px;" align="center">
                        <v-paginator :resource_url="resource_url" <?php echo '@update="updateResource"';?> ></v-paginator>
                    </div>
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
    @if($page->content()->code->footer !== null)
        {!! $page->content()->code->footer  !!}
    @endif
</div>