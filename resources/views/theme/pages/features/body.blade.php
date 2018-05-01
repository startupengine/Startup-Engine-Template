<?php
if(isset($tag)) {
    $tagContent = \App\Tag::where('slug', '=', $tag)->first();
} else {
    $tagContent = null;
} ?>
<div class="wrapper">
    <div class="page-header page-header-small clear-filter" filter-color="black" >


            <div class="container">
                <div class="content-center">
                    @if($page->content()->heading->headline)
                        <h2 class="title text-center" style="text-transform:uppercase !important;color:rgba(0,0,0,1);margin-top:-95px;">{!! $page->markdown($page->content()->heading->headline) !!}</h2>
                    @endif
                </div>
            </div>
    </div>


        <div class="container">
            <div id="articles" style="margin-top:-165px;">
                <div class="row">
                    @if(isset($tag) == false && $page->content() !== null && $page->content()->code !== null && $page->content()->code->header !== null)
                        {!! $page->markdown($page->content()->code->header) !!}
                    @endif
                    @if(isset($tag) == true && $tagContent !== null && $tagContent->content() !== null && $tagContent->content()->code !== null && $tagContent->content()->code->header !== null)
                        {!! $page->markdown($tagContent->content()->code->header) !!}
                    @endif
                    <div class="col-md-12 row row-eq-height" style="margin:-50px 0px 0px 0px;">
                        <todo-item
                                v-for="item in items"
                                v-bind:article="item"
                                v-bind:key="item.id"
                                v-bind:href="item.slug" >
                        </todo-item>

                    </div>
                    @if(isset($tag) == false && $page->content()->code->footer !== null)
                        {!! $page->markdown($page->content()->code->footer) !!}
                    @endif
                    @if(isset($tag) == true && $tagContent !== null && $tagContent->content() !== null && $tagContent->content()->code !== null && $tagContent->content()->code->footer !== null)
                        {!! $page->markdown($tagContent->content()->code->footer) !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>