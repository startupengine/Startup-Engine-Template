<body class="index-page sidebar-collapse">
<div id="startup_engine_nav_container"></div>
<div class="wrapper bg-gradient-blue">
    <div id="page-header" class="page-header page-header-small clear-filter" filter-color="black" style="background:none !important;">
        <div id="header-image" class="page-header-image"
             style="@if($page->content()->heading->background == null)background-color:#3a92f1;@else background-image:url({{ $page->content()->heading->background }}); @endif">
        </div>
        <div class="container">
            <div class="content-center" style="">
                <h2 style="color:#fff;" class="title text-center">{!! $page->content()->heading->headline !!}</h2>
                <div class="form-group" style="padding:15px;">
                    <form method="get" enctype="multipart/form-data" action="">
                        <?php $search = (app('request')->input('s')); ?>
                        <div class="input-group"  style="max-width: 650px;display: inline-flex;background:rgba(0,0,0,0.1);border-radius:30px;">
                            <input type="text" id="s" name="s" class="form-control" placeholder="Search for answers."
                                   @if($search !== null)value="{{ $search }}" @endif autocomplete="off"
                                   aria-label="Search for...">
                            <span class="input-group-addon">
                                    <i class="fa fa-search"></i>
                                </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>