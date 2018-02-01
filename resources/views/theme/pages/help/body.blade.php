<div class="wrapper">
    <div class="section" style="padding-top:25px;margin-top:-100px;background:none;">
        <div class="container">
            <div class="row">
                @if(isset($page->content()->content->html))
                    <div class="col-lg-12 col-md-12">
                        {!! $page->content()->content->html !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>