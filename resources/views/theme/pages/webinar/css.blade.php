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

        .page-header h2, .page-header h4 {
            font-size:22px !important;
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

    .vjs-big-play-button, .grow {
        transition: all .15s ease-in-out;
    }

    .afterglow:hover .vjs-big-play-button, .grow:hover {
        transform: scale(1.06);
        transition: all .15s ease-in-out;
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

    #s {
        border-radius:30px 0px 0px 30px !important;
        z-index:1 !important;
        background:#fff !important;
        color:#222 !important;
    }

    #s:focus {
        background:#fff !important;
    }

    .input-group-append{
        padding:0px !important;
        margin:0px !important;
    }

    .input-group input, .input-group .input-group-append .btn {
        -webkit-border-radius: 7px;
        -moz-border-radius: 7px;
        background:rgba(0,0,0,0.25) !important;
        border:none !important;
        color:#fff !important;
        font-size:16px;
        font-weight:400 !important;
    }

    .input-group:hover input,  .input-group:focus input, .input-group:hover .input-group-append .btn, .input-group:focus .input-group-append .btn{
        background: #fff !important;
        color:#777 !important;
    }


    .input-group .btn {
        z-index:9 !important;
    }

    .input-group-append .btn {
        border-radius: 0px 30px 30px 0px !important;
        padding:20px 25px;
        margin:0px;
    }


    .input-group {
        box-shadow:0px 3px 3px rgba(0, 0, 0, 0.5);
        border-radius:30px;
    }

    #host, #topics, #date {
        background:#2ca8ff08 !important;
        box-shadow:none;
        border:2px solid rgba(44, 168, 255, 0.22);
    }

    #hostName, #hostTitle{
        display:inline-block;
    }

    #hostTitle {
        color:#0591f3;
    }

    #topics li {
        margin-top:15px;
    }

    ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
        color: #555 !important;
        opacity:0.8 !important;
    }
    ::-moz-placeholder { /* Firefox 19+ */
        color: #555 !important;
        opacity:0.8 !important;
    }
    :-ms-input-placeholder { /* IE 10+ */
        color: #555 !important;
        opacity:0.8 !important;
    }
    :-moz-placeholder { /* Firefox 18- */
        color: #555 !important;
        opacity:0.8 !important;
    }


    @media (min-width: 991px) {
        #headerText {
            padding:75px 25px 25px 25px !important;
        }
    }
    @media (max-width: 991px) {
        #headerText {
            padding:100px 25px 25px 25px !important;
        }
    }

    .vjs-poster {
        opacity:0.5 !important;
    }

    .afterglow:hover .vjs-poster {
        opacity:0.6 !important;
    }

    span.help {
        background: rgba(0,0,0,0.5);
        padding: 5px 10px;
        border-radius: 5px;
    }

    #registerButton{
        transition: all 0.25s !important;
    }

    .input-group-valid.is-success.is-untouched #registerButton,
    #registerButton {
        background:#7777dd !important;
        color:#fff !important;
    }


    .input-group-valid.is-touched:not(.is-untouched) #registerButton {
        background:#7777dd !important;
        color:#fff !important;
    }

    .input-group-valid.is-success #registerButton {
        background:#50d892 !important;
        color:#fff !important;
    }

    .input-group.is-danger #registerButton {
        background: #d84643 !important;
        color:#fff !important;
    }

    .input-group-valid.is-success.is-touched.is-untouched, #registerButton,
    .input-group-valid.is-success.is-untouched, #registerButton,
    .input-group-valid.is-success.is-touched #registerButton{
        background:#50d892 !important;
        color:#fff !important;
    }

    .navbar-brand{
        left: calc(50% - 47px) !important;
        top: 0px;
        position: absolute !important;
        width: 95px !important;
        text-align: center !important;
    }

    @media (max-width: 991px) {
        .navbar-transparent:not(.navbar-white) .navbar-brand {
            top: -10px !important;
        }

        .navbar-transparent.navbar-white .navbar-brand {
            top: -25px !important;
        }
        .navbar-brand{
            top:-25px;
        }
    }

    @media (min-width: 991px) {
        .navbar-transparent:not(.navbar-white) .navbar-brand {
            top: 15px !important;
        }

        .navbar-transparent.navbar-white .navbar-brand {
            top: 0px !important;
        }
    }

    #title, #subtitle {
        margin:20px !important;
    }

    .page-header-image {
        display:none;
    }
    .navbar-brand {
        display:none
    }
</style>

<script src="https://unpkg.com/vee-validate@2.0.3/dist/vee-validate.js"></script>

@if($page->content()->code->css !== null){!! $page->content()->code->css  !!} @endif