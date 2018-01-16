<div id="startup_engine_nav_container"></div>
<div class="wrapper">
    <div class="page-header page-header-small clear-filter" filter-color="black">
        <div class="page-header-image"
             <?php
             if(isset($tag)) {
                 $tagContent = \App\Tag::where('slug', '=', $tag)->first();
             } ?>
             @if(isset($tag) && isset($tagContent->content()) && $tagContent->content()->info->image !== null)
             style="background-image:url('{{$tagContent->content()->info->image}}'); background-size:cover ;z-index: 0;opacity: 0.3;"
             @elseif(isset($page->content()->heading->background))
             style="background-image:url('{{$page->content()->heading->background}}'); background-size:cover;z-index: 0;opacity: 0.3;"
                @endif
        ></div>
        <div class="container">
            <div class="content-center">
                @if(isset($tag))
                    <h1 class="title text-center">{{ ucwords($tag) }}</h1>
                @elseif($page->content()->heading->headline !== null && isset($tag) !== true)
                    <h1 class="title text-center">{{ $page->content()->heading->headline }}</h1>
                @endif
                @if(isset($tag))
                    @if(isset($tag) && isset($tagContent->content()->info->description))
                        <h3 class="description text-center" >{{$tagContent->content()->info->description}}</h3>
                    @else
                        <h3 class="description text-center" >A collection of @{{ items.length }} posts.</h3>
                    @endif
                @elseif($page->content()->heading->intro !== null)
                    <h3 class="description text-center" >{{ $page->content()->heading->intro }}</h3>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="section" style="padding-bottom:0px;padding-top:50px;margin-top:-100px !important;background:none;">
        <div class="container">
            <div id="articles">
                <div class="row">
                    <div class="@if($page->content()->about->headline !== null) col-md-8 @else col-md-12 @endif row row-eq-height" style="margin:0px;">
                        <todo-item
                                v-for="item in items"
                                v-bind:article="item"
                                v-bind:key="item.id"
                                v-bind:href="item.slug">
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
                </div>
            </div>
        </div>
    </div>
</div>