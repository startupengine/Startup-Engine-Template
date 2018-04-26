<style>
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

    .page-header-image {
        background: #8b69ff;
        background: -webkit-linear-gradient(to top right, #ff35a4, #350090);
        background: linear-gradient(to top right, #ff35a4, #350090);
    }

    #articles {
        margin-top: -50px;
        /*
        border-radius: 5px;
        background: #fff;
        box-shadow: 0px -30px 60px rgba(0,0,0,0.2);
        padding:0px 30px 30px 0px;
        */
    }

    @media only screen and (max-width: 1024px) {
        #articles {
            /*
            padding:0px !important;
            background:none !important;
            box-shadow:none !important;
            */
        }
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

    @media screen and (max-width: 991px) {

        .page-header, .page-header-small {
            min-height: 400px !important;
        }
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

    .col-md-6:nth-of-type(3), .col-md-6:nth-of-type(4), .col-md-6:nth-of-type(5), .col-md-6:nth-of-type(9), .col-md-6:nth-of-type(10), .col-md-6:nth-of-type(11), .col-md-6:nth-of-type(15), .col-md-6:nth-of-type(16), .col-md-6:nth-of-type(17),.col-md-6:nth-of-type(21),.col-md-6:nth-of-type(22),.col-md-6:nth-of-type(23),.col-md-6:nth-of-type(27),.col-md-6:nth-of-type(28),.col-md-6:nth-of-type(29) {
        min-width: 33% !important;
        width: 33% !important;
        flex: 0 0 33% !important;
    }

    @media(min-width:991px) {
        .col-md-6:nth-of-type(5),.col-md-6:nth-of-type(11),.col-md-6:nth-of-type(17),.col-md-6:nth-of-type(23),.col-md-6:nth-of-type(29) {
            padding-right: 5px !important;
        }

        .col-md-6:nth-of-type(6) .image-container, .col-md-6:nth-of-type(12) .image-container, .col-md-6:nth-of-type(18) .image-container, .col-md-6:nth-of-type(24) .image-container, .col-md-6:nth-of-type(30) .image-container {
            height: 100% !important;
            width:70% !important;
        }

        .col-md-6:nth-of-type(6) .card-body, .col-md-6:nth-of-type(12) .card-body, .col-md-6:nth-of-type(18) .card-body, .col-md-6:nth-of-type(24) .card-body, .col-md-6:nth-of-type(30) .card-body {
            background: #fff !important;
            position: absolute !important;
            right: 0px !important;
            bottom: 0px !important;
            float: right !important;
            width: calc(33% + 5px) !important;
            height: 100% !important;
        }

        .col-md-6:nth-of-type(6) .card, .col-md-6:nth-of-type(12) .card, .col-md-6:nth-of-type(18) .card, .col-md-6:nth-of-type(24) .card, .col-md-6:nth-of-type(30) .card {
            min-height:350px !important;
        }

        .col-md-6:nth-of-type(6) .card-header, .col-md-6:nth-of-type(12) .card-header, .col-md-6:nth-of-type(18) .card-header, .col-md-6:nth-of-type(24) .card-header, .col-md-6:nth-of-type(30) .card-header {
            top:0px !important;
        }

    }
    .col-md-6:nth-of-type(6),    .col-md-6:nth-of-type(12),    .col-md-6:nth-of-type(18),    .col-md-6:nth-of-type(24),    .col-md-6:nth-of-type(30) {
        min-width: 100% !important;
        width: 100% !important;
        flex: 0 0 100% !important;
    }

    .col-md-6,     .col-md-6:nth-of-type(7),   .col-md-6:nth-of-type(8) ,  .col-md-6:nth-of-type(19) ,  .col-md-6:nth-of-type(20) {
        min-width: 50% !important;
        width: 50% !important;
        flex: 0 0 50%;
    }

    @media screen and (max-width: 991px) {
        .col-md-6, .col-md-6:nth-of-type(1), .col-md-6:nth-of-type(2), .col-md-6:nth-of-type(3), .col-md-6:nth-of-type(4), .col-md-6:nth-of-type(5),
        .col-md-6:nth-of-type(6), .col-md-6:nth-of-type(7), .col-md-6:nth-of-type(8), .col-md-6:nth-of-type(9), .col-md-6:nth-of-type(10),
        .col-md-6:nth-of-type(11), .col-md-6:nth-of-type(12), .col-md-6:nth-of-type(13), .col-md-6:nth-of-type(14), .col-md-6:nth-of-type(15),
        .col-md-6:nth-of-type(16), .col-md-6:nth-of-type(17), .col-md-6:nth-of-type(18), .col-md-6:nth-of-type(19), .col-md-6:nth-of-type(20),
        .col-md-6:nth-of-type(21), .col-md-6:nth-of-type(22), .col-md-6:nth-of-type(23), .col-md-6:nth-of-type(24), .col-md-6:nth-of-type(25),
        .col-md-6:nth-of-type(26), .col-md-6:nth-of-type(27), .col-md-6:nth-of-type(28), .col-md-6:nth-of-type(29), .col-md-6:nth-of-type(30){
            min-width: 100% !important;
            width: 100% !important;
            flex: 0 0 100% !important;
        }
    }

    @media screen and (min-width:991px) {
        .col-md-6:nth-of-type(4):last-of-type, .col-md-6:nth-of-type(10):last-of-type, .col-md-6:nth-of-type(16):last-of-type, .col-md-6:nth-of-type(22):last-of-type, .col-md-6:nth-of-type(28):last-of-type {
            min-width: 66% !important;
            width: 66% !important;
            flex: 0 0 66% !important;
        }
        .col-md-6:nth-of-type(1):last-of-type, .col-md-6:nth-of-type(3):last-of-type, .col-md-6:nth-of-type(7):last-of-type, .col-md-6:nth-of-type(9):last-of-type, .col-md-6:nth-of-type(13):last-of-type, .col-md-6:nth-of-type(15):last-of-type, .col-md-6:nth-of-type(19):last-of-type, .col-md-6:nth-of-type(21):last-of-type, .col-md-6:nth-of-type(27):last-of-type {
            min-width: 100% !important;
            width: 100% !important;
            flex: 0 0 100% !important;
        }
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/vuejs-paginator/2.0.0/vuejs-paginator.js"></script>

@if($page->content()->code->css !== null){!! $page->content()->code->css  !!} @endif

<?php
if(isset($tag)) {
    $tagContent = \App\Tag::where('slug', '=', $tag)->first();
} else {
    $tagContent = null;
} ?>

@if(isset($tag) && $tagContent !== null && $tagContent->content() !== null)
    {!! $tagContent->content()->page->css  !!}
@endif