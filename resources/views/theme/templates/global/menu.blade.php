<?php /*
<div class="alert alert-info bg-gradient-blue" role="alert" style="opacity:1;background:royalblue;text-align:center;margin-bottom:0px;min-width:100%;position: fixed;top: 0px;left: 0px;z-index:999999999 !important;box-shadow:0px 0px 25px rgba(0,0,0,0.3);padding:23px;line-heigh:150%;">
        You successfully read this important alert message.
        &nbsp;<a href="#" class="btn btn-simple btn-sm" style="display:inline;margin:5px !important;">Learn More <i class="fa fa-caret-right"></i></a>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">
				<i class="now-ui-icons ui-1_simple-remove" id="remove-notification-button"></i>
			</span>
        </button>
</div>
*/ ?>
<!-- Navbar -->
 <nav class="navbar navbar-expand-lg bg-white fixed-top navbar-transparent" color-on-scroll="100" id="top-nav">
     <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" @if(setting('site.logo_link') !== null) href="{{ setting('site.logo_link') }}" @else href="/" @endif rel="tooltip" title="{{ setting('site.description') }}"
               data-placement="bottom">
                <?php if(setting('site.logo') !== null) { ?><img src="{{ setting('site.logo') }}" alt="Logo Icon"
                                                                 style="max-width:40px;"> <?php } ?>{{ setting('site.name') }}
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <div id="mobile-nav-brand" align="center" style="
    margin-top: 25px;
"><a class="navbar-brand" href="/" style="margin:0px;text-align:center;">
                    <?php if(setting('site.logo') !== null) { ?><img src="{{ setting('site.logo') }}" alt="Logo Icon"
                                                                     style="max-width:40px;"> <?php } ?>{{ setting('site.name') }}</span>
                </a>
            </div>
            <ul class="navbar-nav">
                <?php if(\Auth::user() !== null && \Auth::user()->hasPermissionTo('view own profile')) {  ?>
                <li class="nav-item">
                    <a href="/app" class="nav-link hiddenOnDesktop">
                        <i class="now-ui-icons arrows-1_share-66"></i> &nbsp;Admin
                    </a>
                </li>
                <?php }  ?>

                <?php if(\Auth::user() !== null) {  ?>
                <li class="nav-item">
                    <a href="/account" class="nav-link hiddenOnDesktop">
                        <i class="now-ui-icons users_circle-08"></i> &nbsp;Account
                    </a>
                </li>
                <?php }  ?>
                <?php if (setting('site.menu') !== null) { echo setting('site.menu');} else { ?>
                    <?php $about = \App\Page::where('slug', '=', 'about')->where('status','=','ACTIVE')->first(); ?>
                    @if($about !== null)
                        <li class="nav-item">
                            <a href="/about" class="nav-link">{{ $about->title }}</a>
                        </li>
                    @endif
                    <?php $products = \App\Page::where('slug', '=', 'products')->where('status','=','ACTIVE')->first(); ?>
                    @if($products !== null)
                        <li class="nav-item">
                            <a href="/products" class="nav-link">{{ $products->title }}</a>
                        </li>
                    @endif
                    <?php $features = \App\Page::where('slug', '=', 'features')->where('status','=','ACTIVE')->first(); ?>
                    @if($features !== null)
                        <li class="nav-item">
                            <a href="/features" class="nav-link">{{ $features->title }}</a>
                        </li>
                    @endif
                    <?php $articles = \App\Page::where('slug', '=', 'articles')->where('status','=','ACTIVE')->first(); ?>
                    @if($articles !== null)
                        <li class="nav-item">
                            <a href="/articles" class="nav-link">{{ $articles->title }}</a>
                        </li>
                    @endif
                    <?php $pricing = \App\Page::where('slug', '=', 'pricing')->where('status','=','ACTIVE')->first(); ?>
                    @if($pricing !== null)
                        <li class="nav-item">
                            <a href="/pricing" class="nav-link">Pricing</a>
                        </li>
                    @endif
                    <?php $help = \App\Page::where('slug', '=', 'resources')->where('status','=','ACTIVE')->first(); ?>
                    @if($help !== null)
                        <li class="nav-item">
                            <a href="/resources" class="nav-link">{{ $help->title }}</a>
                        </li>
                    @endif
                    @if(\Auth::user() == false)
                    <li class="nav-item">
                        <a href="/login" class="nav-link" style="background:rgba(0,0,0,0.75);color:#fff !important;">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a href="/signup" id="nav-cta" class="nav-link">Sign Up &nbsp;<i class="fa fa-caret-right" style=""></i></a>
                    </li>
                    @endif
                <?php } ?>
                <?php if(\Auth::user() !== null) {  ?>
                <li class="nav-item">
                    <div class="btn-group hiddenOnMobile">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false" id="nav-admin-button">
                            {{ \Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <?php if(\Auth::user() !== null && \Auth::user()->hasPermissionTo('view backend')) {  ?>
                            <button class="dropdown-item" type="button" onclick="location.href='/app';"><i
                                        class="now-ui-icons arrows-1_share-66"></i>&nbsp; Admin
                            </button>
                            <?php }  ?>
                            <?php if(\Auth::user() !== null) {  ?>
                            <button class="dropdown-item" type="button" onclick="location.href='/account';"><i
                                        class="now-ui-icons users_circle-08"></i>&nbsp; Account
                            </button>
                            <?php }  ?>
                            <button class="dropdown-item" type="button" onclick="location.href='/logout';"><i
                                        class="now-ui-icons ui-1_lock-circle-open"></i>&nbsp; Sign Out
                            </button>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="/logout" class="nav-link hiddenOnDesktop">
                        <i class="now-ui-icons ui-1_lock-circle-open"></i> &nbsp;Sign Out
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->

