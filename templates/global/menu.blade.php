<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/" rel="tooltip" title="PsychoAnalyze any website." data-placement="bottom">
                <img src="{{ setting('site.logo') }}" alt="Logo Icon" style="max-width:40px;"> {{ setting('site.title') }}
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
"> <a class="navbar-brand" href="/">
                    <img src="{{ setting('site.logo') }}" alt="Logo Icon" style="max-width:40px;"> {{ setting('site.title') }}</span>
                </a>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <p>About</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/features">
                        <p>Features</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/help">
                        <p>Help & Documentation</p>
                    </a>
                </li>
                <?php if(\Auth::user() !== null && \Auth::user()->role()->name == 'admin'){  ?>
                <li class="nav-item">
                    <a class="nav-link" href="/app">
                        <p>Admin</p>
                    </a>
                </li>
                <?php } else { ?>
                 <li class="nav-item">
                    <a class="nav-link btn btn-secondary btn-simple" id="nav-cta" href="https://app.psychoanalytics.io" target="_blank" style="color:#fff !important;border:1px solid #7777dd !important;" onclick="mixpanel.track('nav-cta');">
                        <i class="now-ui-icons arrows-1_share-66"></i>
                        <p>Get Started</p>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->