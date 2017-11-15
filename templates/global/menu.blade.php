<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/" rel="tooltip" title="{{ setting('site.description') }}" data-placement="bottom">
                <?php if(setting('site.logo') !== null) { ?><img src="{{ setting('site.logo') }}" alt="Logo Icon" style="max-width:40px;"> <?php } ?>{{ setting('site.title') }}
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <div id="mobile-nav-brand" align="center" style="
    margin-top: 25px;
"> <a class="navbar-brand" href="/" style="margin:0px;text-align:center;">
                    <?php if(setting('site.logo') !== null) { ?><img src="{{ setting('site.logo') }}" alt="Logo Icon" style="max-width:40px;"> <?php } ?>{{ setting('site.title') }}</span>
                </a>
            </div>
            <ul class="navbar-nav">
               <?php echo setting('site.menu'); ?>
                <?php if(\Auth::user() !== null && \Auth::user()->role()->name == 'admin'){  ?>
                <li class="nav-item">
                    <a class="nav-link" href="/app">
                        <p>Admin</p>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->