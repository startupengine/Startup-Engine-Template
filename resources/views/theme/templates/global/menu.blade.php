<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white fixed-top navbar-transparent " color-on-scroll="100">
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
                <?php echo setting('site.menu'); ?>
                <?php if(\Auth::user() !== null) {  ?>
                <li class="nav-item">
                    <div class="btn-group hiddenOnMobile">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
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