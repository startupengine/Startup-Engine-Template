<?php
if(isset($tag)) {
    $tagContent = \App\Tag::where('slug', '=', $tag)->first();
} else {
    $tagContent = null;
} ?>

<div class="wrapper" style="background:linear-gradient(180deg,#ebf2ff,#fff);" >
    <div class="page-header page-header-small clear-filter @if($page->content()->heading->background == null) no-image @endif" style="background:none !important;">
        @if(isset($tag))
            @if(isset($tagContent) && $tagContent->content() !== null && $tagContent->content() !== null && $tagContent->content()->info && $tagContent->content()->info->image !== null)
                <div id="header-image" class="page-header-image" style="background-image:url('{{$tagContent->content()->info->image}}'); background-size:cover ;z-index: 0;opacity: 0.3;"></div>
            @elseif(isset($page->content()->heading->background))
                <div id="header-image" class="page-header-image" style="background-image:url('{{$page->content()->heading->background}}'); background-size:cover;z-index: 0;opacity: 0.3;"></div>
            @endif
            <div class="container">
                <div class="content-center"  style="margin-top:-20px;">
                    @if(isset($tagContent) && $tagContent->content() !== null && $tagContent->content() !== null && $tagContent->content()->info !== null && $tagContent->content()->info->full_name !== null)
                        <h2 style="    border-bottom: 2px solid rgba(255,255,255,0.25);color:#fff;padding-bottom:25px;" class="title text-center">{{ $tagContent->content()->info->full_name }}</h2>
                    @elseif(isset($tag) && ($tagContent == null OR $tagContent->content() == null OR $tagContent->content()->info->full_name == null))
                        <?php $words = explode("?", $tag, 2);
                        $first = $words[0]; ?>
                        <h2 style="color:#fff;" class="title text-center">{{ ucwords($first) }}</h2>
                    @endif

                    @if(isset($tag) && $tagContent !== null && $tagContent->content() !== null && $tagContent->content()->info !== null && $tagContent->content()->info->description !== null)
                        <h4 class="description text-center" >{{$tagContent->content()->info->description}}</h4>
                    @else
                            <h4 class="description text-center" >A collection of @{{ items.length }} <?php if(request()->input('post_type') !== null) { echo request()->input('post_type'); } ?> post<span v-if="items.length > 1">s</span>.</h4>
                    @endif
                </div>
            </div>
        @else
            <div id="header-image" class="page-header-image" style="background-image:url('{{$page->content()->heading->background}}'); background-size:cover;z-index: 0; @if($page->content()->heading->background !== null) opacity: 0.3; @else 0; display:none; @endif"></div>
            <div class="container">
                <div class="content-center" style="margin-top:-20px;">
                    @if($page->content()->heading->headline)
                        <h2 style="border-bottom: 2px solid rgba(255,255,255,0.25);color:#fff;" class="title text-center">{!! $page->markdown($page->content()->heading->headline) !!}</h2 >
                    @endif
                    @if($page->content()->heading->intro !== null)
                        <h4 class="description text-center" >{{ $page->content()->heading->intro }}</h4>
                    @endif
                </div>
            </div>
    </div>
    @endif
</div>
</div>
<div class="wrapper">
    <div class="section" style="padding-bottom:0px;padding-top:50px;margin-top:-150px !important;background:none;height:100vh;max-height:calc(100vh - 200px);">
        <div class="container">
            <div id="articles" >
                <div class="row">
                    @if(isset($tag) == false && $page->content() !== null && $page->content()->code !== null && $page->content()->code->header !== null)
                        {!! $page->markdown($page->content()->code->header) !!}
                    @endif
                    @if(isset($tag) == true && $tagContent !== null && $tagContent->content() !== null && isset($tagContent->content()->code) && $tagContent->content()->code->header !== null)
                        {!! $page->markdown($tagContent->content()->code->header) !!}
                    @endif
                    <div class="@if($page->content()->about->headline !== null) col-md-8 @else col-md-12 @endif row row-eq-height" style="margin:0px;">
                        <todo-item
                                v-for="item in items"
                                v-bind:article="item"
                                v-bind:key="item.id"
                                v-bind:href="item.slug" >
                        </todo-item>

                        <div class="col-md-12" style="width:100%;padding:25px;" align="center">
                            <v-paginator :resource_url="resource_url" <?php echo '@update="updateResource"';?> ></v-paginator>
                        </div>
                    </div>
                    @if($page->content()->about->headline !== null)
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="card" style="margin-top:25px;">
                                    @if($page->content()->about->headline !==null OR $page->content()->about->description !== null)
                                        <div class="card-body" style="min-height:50px;">
                                            @if($page->content()->about->headline !== null)
                                                <p><strong>{{ $page->content()->about->headline }}</strong></p>
                                            @endif
                                            @if($page->content()->about->description !== null)
                                                <p>{{ $page->content()->about->description }}</p>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                                @if($page->content()->sidebar->html!== null)
                                    @if($page->content()->sidebar->html !== null)
                                        <?php echo $page->markdown($page->content()->sidebar->html); ?>
                                    @endif
                                @endif
                            </div>
                        </div>
                    @endif
                    @if(isset($tag) == false && $page->content()->code->footer !== null)
                        {!! $page->markdown($page->content()->code->footer) !!}
                    @endif
                    @if(isset($tag) == true && $tagContent !== null && $tagContent->content() !== null && isset($tagContent->content()->code) && $tagContent->content()->code->footer !== null)
                        {!! $page->markdown($tagContent->content()->code->footer) !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>