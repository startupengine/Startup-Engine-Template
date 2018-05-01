<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
<!-- CSS Files -->
<link href="/css/bootstrap.min.css" rel="stylesheet"/>
<link href="/css/now-ui-kit.css?v=1.1.0" rel="stylesheet"/>
<link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.css"/>

<style>

    .btn-default {
        background:#333 !important;
    }

    .btn-outline {
        border: 1px solid royalblue !important;
        background: #fff !important;
        color: royalblue;
    }

    .btn-outline:hover {
        color: #222;
    }

    .btn-secondary {
        background: royalblue !important;
    }

    .btn-secondary-outline {
        border: 1px solid royalblue !important;
        color: royalblue !important;
        background: transparent !important;
    }

    .bg-gradient-blue {
        background: royalblue !important;
        background: -webkit-linear-gradient(to right, royalblue, #00adff) !important;
        background: linear-gradient(to right, royalblue, #00adff) !important;
        color: #fff !important;
    }

    .bg-gradient-orange {
        background: #ff9966;
        background: -webkit-linear-gradient(to top right, #ff5e62, #ff9966);
        background: linear-gradient(to top right, #ff5e62, #ff9966);
    }

    .bg-gradient-multi {
        background: #ff9966;
        background: -webkit-linear-gradient(to top right, #ff5e62, #2dbeff);
        background: linear-gradient(to top right, #ff5e62, #2dbeff);
    }

    .bg-gradient-purple {
        background: #8b69ff;
        background: -webkit-linear-gradient(to top right, #ff35a4, #350090);
        background: linear-gradient(to top right, #ff35a4, #350090);
    }

    .bg-gradient-blue .btn, .bg-gradient-blue .btn {
        color: #fff !important;
        border-color: #fff !important;
    }


    .h1-seo {
        font-weight: 400 !important;
    }

    .card {
        border-radius: 5px !important;
        box-shadow:0px 5px 12px 0px rgba(0, 0, 75, 0.15);
    }

    .card h4 {
        margin-top: 10px !important;
        text-align: center;
    }

    @media screen and (max-width: 991px) {
        .sidebar-collapse .navbar-collapse .navbar-nav:not(.navbar-logo) .nav-link:not(.btn) {
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-collapse .navbar .navbar-nav {
            margin-top: 15px !important;
        }

        .page-header {
            min-height: 100vh !important;
        }

    }

    h1.title {
        font-weight: 400 !important;
    }

    h3, h4 {
        font-weight: 300 !important;
        color:#222;
    }

    .sidebar-collapse .navbar-collapse:before {
        background: none; /* fallback for old browsers */
    }

    .page-header[filter-color="orange"] {
        background: rgba(44, 44, 44, 0.0);
        background: -webkit-linear-gradient(90deg, rgba(44, 44, 44, 0), rgba(224, 23, 3, 0.6));
        background: -o-linear-gradient(90deg, rgba(44, 44, 44, 0), rgba(224, 23, 3, 0.6));
        background: -moz-linear-gradient(90deg, rgba(44, 44, 44, 0), rgba(224, 23, 3, 0.6));
        background: linear-gradient(0deg, rgba(44, 44, 44, 0), rgba(224, 23, 3, 0.6));
    }

    .page-header.page-header-small {
        max-height: none !important;
    }

    #disqus_thread {
        padding: 15px;
    }

    .nav-link i, .nav-link svg {
        font-size:10px !important;
        margin:0px 0px 0px 5px !important;
        padding:0px !important;
        width:10px !important;
        height:10px !important;
        display:inline-block !important;
    }

    footer {
        position: absolute;
        bottom: 0px;
        width: 100%;
        left: 0px;
        color: #222;
        background: #fff !important;
    }

    footer a {
        color: #333;
    }

    footer a:hover {
        color: #111;
    }

    #mobile-nav-brand {
        display: none;
    }

    @media screen and (max-width: 991px) {
        #navigation .nav-link:not(.btn) {
            color: royalblue;
            background: #fff;
            margin-bottom: 5px;
            border: none;
            box-shadow: 0px 7px 18px rgba(0, 0, 0, 0.1);
            text-align: center !important;
        }

        #navigation .nav-link:not(.btn) i {
            display:none;
        }

        #nav-cta {
            color: #fff !important;
        }
    }

    @media screen and (min-width: 991px) {
        .hiddenOnMobile {
            display: auto !important;
        }

        .hiddenOnDesktop {
            display: none !important;
        }
    }

    @media screen and (max-width: 991px) {
        .hiddenOnMobile {
            display: none !important;
        }

        .hiddenOnDesktop {
            display: auto !important;
        }

        #mobile-nav-brand {
            display: block;
        }

        #mobile-nav-brand .navbar-brand {
            color: #fff !important;
        }

        #navigation .nav-link, #navigation .btn {
            background: #fff !important;
            color: #222 !important;
            border: 1px solid transparent !important;
            border-radius: 25px !important;
            opacity:0.85;
        }

        #navigation .nav-link:hover, #navigation .btn:hover {
            border: 1px solid transparent !important;
            opacity:1;
        }

        #navigation .nav-link:not(.btn):hover {
            color: #fff !important;
            opacity:1;
        }

        .navbar-transparent #nav-cta {
            color: #fff !important;
        }

        #navigation {
            background-image: linear-gradient(180deg, #111 0%, #333 100%) !important;
            background-size: cover;
            background-position: top !important;
        }
    }

    #nav-admin-button{
        background:#333;
        color:#fff !important;
    }

    #articles-index .page-header:before {
        background: none;
    }

    .page-header h1, .page-header h2, .main h1 {
        font-weight: 600 !important;
    }


    .main h2, .page-header h3, .main h3, .page-header h4, .main h4, .page-header h5, .main h5 {
        font-weight: 400 !important;
    }

    .navbar-brand {
        color: #333;
        font-weight: 600 !important;
    }

    .nav-link, .nav-link p {
        font-weight: 600 !important;
    }

    #engage:hover {
        color: #222 !important;
        background: #fff !important;
    }

    .card h4 {
        font-weight: 600 !important;
        text-shadow: none !important;
        text-align: left !important;
        font-size: 225% !important;
        color: #555 !important;
    }

    .card p {
        font-size: 125% !important;
        color: #444 !important;
        line-height: 200% !important;
    }

    .navbar.bg-white:not(.navbar-transparent) a.nav-link {
        color: #333 !important;
    }

    .navbar.bg-white:not(.navbar-transparent) .navbar-brand {
        color: #333 !important;
    }

    .navbar.navbar-expand-lg .nav-link.nav-link-outline {
        box-shadow: 0px 0px 0px 1px royalblue inset;
    }

    .navbar.navbar-expand-lg .nav-link.nav-link-outline:hover {
        background: royalblue !important;
        color: #fff !important;
    }

    .navbar {
        padding-top: 0.125rem;
        padding-bottom: 0.125rem;
    }

    .card-header.featured {
        color: #fff !important;
        background-image: linear-gradient(to right, #ff316a 0%, #fe9840 100%) !important;
        font-weight: 600 !important;
    }

    .nav-link {
        border-radius: 0.1875rem !important;
    }

    .vjs-poster {
        background-size: cover !important;
        opacity: 1 !important;
    }

    .withNotification {
        margin-top:67px;
    }

    @media(max-width:991px){
        .withNotification {
            margin-top:85px;
        }
    }




    #nav-cta {
        background: #00adff !important;
        color: #fff !important;
    }

    .navbar-transparent #nav-cta {
        background: #fff !important;
        color: #00adff !important;
    }


    .navbar .navbar-nav .nav-link:not(.btn) {
        padding: 0.15rem 1rem;
        border-radius:4px !important;
    }
</style>

<!-- jQuery ScrollTo -->
<script defer src="//rawgit.com/balupton/jquery-scrollto/gh-pages/lib/jquery-scrollto.js"></script>