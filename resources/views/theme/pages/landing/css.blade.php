<style>
    .icon-img {
        height: 80px;
        width: 80px;
        padding: 15px;
    }

    .img-raised {
        box-shadow: 0px 0px 90px rgba(0, 0, 150, 0.2) !important;
    }

    h2, h3, h4, h5, h6 {
        font-weight: 400 !important;
    }

    p.description {
        color: #555;
        font-weight: 400;
        text-align: center;
    }

    .page-header h3.description {
        color: #fff !important;
    }

    a:hover {
        text-decoration: none;
    }

    #feature-pills {
        margin-bottom: 25px;
    }

    #screenshots .col-lg-4 {
        margin-bottom: 25px !important;
    }

    #screenshots img {
        border-radius: 5px !important;
        margin-bottom: 25px !important;
    }

    .page-header:before {
        background:none;
    }

    #logos img {
        margin-left: 15px;
        margin-right: 15px;
        margin-bottom: 30px;
    }

    .section img {
        max-height: 400px;
        margin: 25px 0px;
    }

    #options a:hover {
        opacity: 1 !important;
        background: #fff !important;
        color: #6666dd !important;
    }

    .bg-gradient-purple {
        background-image: linear-gradient(-135deg, #7876ff, #6607d6);
    }

    #pricing .card {
        font-size: 16px;
        box-shadow: 0px 10px 45px rgba(0, 0, 150, 0.2) !important;
        border-radius: 7px;
    }

    #pricing .card:nth-of-type(2) {
        color: #fff;
    }

    .bg-gradient-orange {
        background: linear-gradient(-90deg, #ffbb13, #ff0076) !important;
    }

    #pricing .card-header {
        font-weight: 600 !important;
        font-size: 18px;
        padding-bottom: 0px !important;
    }

    #pricing .card:nth-of-type(2) .card-header {
        color: #fff;
    }

    #pricing .card-header, #pricing .card-footer {
        background: none !important;
        color: #8651ff;
        border: none;
        padding: 25px;
    }

    .halfCircleBottom {
        height: 90% !important;
        width: 100%;
        border-radius: 0 0 50% 50%;
        transform: scale(1.1);
    }

    @media (min-width: 991px) {
        #laptop {
            margin: -90px 50px 50px 50px;
        }
    }

    @media (max-width: 991px) {
        #laptop {
            margin: -75px 0px 50px 0px;
        }

        .page-header h1 {
            padding-top: 15px;
        }

        .title {
            font-size: 33px;
            padding: 0px 15px;
        }

        .description {
            font-size: 21px;
            padding: 0px 15px;
        }

        .page-header {
            min-height: 440px !important;
        }
    }

    .grow {
        transition: all .15s ease-in-out;
    }

    .grow:hover {
        transform: scale(1.06);
    }

    .card.bg-gradient-purple p {
        color:#fff !important;
    }

    #pricing .btn-neutral.btn-simple {
        color: #8651ff;
        border-color: #8651ff;
    }

    #pricing .bg-gradient-purple .btn {
        background: #fff !important;
        color: #fff !important;
    }

    .v-paginator .btn {
        border-radius:25px !important;
        margin-right:5px !important;
        margin-left:5px !important;
        min-width:100px !important;
    }
</style>

@if($page->content()->code->css !== null){!! $page->content()->code->css  !!} @endif