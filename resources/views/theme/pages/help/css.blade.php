<style>
    .page-header-image {
        background: #000;
    }
    @media screen and (max-width: 991px) {
        .page-header {
            min-height: 440px !important;
        }
    }

    #s {
        border-radius:30px 0px 0px 30px !important;
    }

    .input-group .input-group-addon {
        border-radius: 0px 30px 30px 0px !important;
    }

    .input-group input, .input-group .input-group-addon {
        -webkit-border-radius: 7px;
        -moz-border-radius: 7px;
        padding:20px !important;
        background:rgba(0,0,0,0.25) !important;
        border:none !important;
        color:#fff !important;
        font-size:16px;
        font-weight:400 !important;
    }

    .input-group:hover input,  .input-group:focus input, .input-group:hover .input-group-addon, .input-group:focus .input-group-addon{
        background: #fff !important;
        color:#777 !important;
    }

    .card-link:hover {
        text-decoration: none !important;
    }

    .card-text {
        color: #666;
    }

    .card-title {
        color: #111 !important;
    }

    .card-footer {
        color: #2CA8FF !important;
    }

    .page-header {
        background: #000 !important;

    }

    .page-header-image {
        background-size: 700px !important;
        background-repeat: no-repeat !important;
        background-position: center center !important;
        background-color: #000 !important;
    }

    .page-header .description {
        opacity: 1 !important;
        color: #fff !important;
    }

    #articles {
        padding:15px;
        width:100%;
        margin:-50px 0px 0px 0px;
    }

    @media only screen and (max-width: 1024px) {
        .hiddenOnMobile {
            display: none;
        }
    }

    @media only screen and (max-width: 1024px) {
        .hiddenOnMobile {
            display: none;
        }
    }

    .image-container {
        min-height: 200px;
        width: 100%;
        background-size: cover !important;
        background-position: center !important;
    }

    .image-container.featured {
        min-height: 154px;
        width: 100%;
        background-size: cover !important;
        background-position: center !important;
    }

    .card-body {
        color: #222 !important;
        min-height: 130px !important
    }

    .page-header h5 {
        font-size: 200% !important;
    }

    .card .btn {
        margin-top: 25px !important;
        margin-bottom: 0px !important;
        text-align: right !important;
    }

    .card:hover .btn, .card:hover .btn i {
        color: #000 !important;
        opacity: 1;
    }

    .card .btn i, .card .btn svg {
        color: #ffc107 !important;
    }

    .card:hover h4 {
        color: #000 !important;
    }

    .card .btn-block {
        position: absolute !important;
        bottom: 0px !important;
        display: inline-block !important;
        right: 0px !important;
        padding: 25px !important;
    }

    .wrapper > .section {
        z-index: 999 !important;
    }

    .content-center {
        top: calc(37% + 50px) !important
    }

    .col-md-8 .col-md-6 {
        min-width: 100% !important;
    }

    .card h4 {
        margin-bottom: 0px !important;
        font-size:22px !important;
    }

    .col-md-6 {
        float: left !important;
    }

    .row-eq-height .col-md-6:only-child {
        min-width: 100% !important;
    }

    .card-body p:last-of-type {
        margin-bottom: 35px;
    }

    .card-header.featured {
        background: #fefefe !important;
        float: left;
        color: #333 !important;
        margin: 10px;
        border-radius: 25px !important;
        box-shadow: 3px 3px 5px rgba(0,0,0,0.4);
        top:133px;
        left:0px;
        position:relative;
    }

    .v-paginator .btn {
        border-radius:25px;
        margin-right:5px;
        margin-left:5px;
        min-width:100px;
    }

    .page-header.no-image {
        background: #000 !important;
    }
</style>

@if($page->content()->code->css !== null){!! $page->content()->code->css  !!} @endif

@if(isset($tag) && $tagContent !== null && $tagContent->content() !== null && $tagContent->content()->code !== null && $tagContent->content()->code->css !== null)
    {!! $page->content()->code->css  !!}
@endif

<script src="https://cdnjs.cloudflare.com/ajax/libs/vuejs-paginator/2.0.0/vuejs-paginator.js"></script>

