<style>
    #content p {
        font-size:125% !important;
        line-height:166% !important;
    }

    #content > div:first-of-type {
        margin-top:0px !important;
    }

    #title, #date {
        margin:15px !important;
    }

    #date {
        margin-bottom:20px !important;
    }

    #content h1, #content h2, #content h3, #content h4, #content h5, #content h6 {
        text-align:center !important;
        font-weight:400 !important;
        text-shadow: none !important;
    }
    .btn.btn-simple {
        color:#fff !important;
        border-color:#fff !important;
    }

    #content .excerpt {
        font-weight: 400 !important;
        margin-top:0px;
        text-align: center !important;
        color: #000;
        font-weight: 400;
        padding:25px 25px 0px 25px !important;
    }

    #content {
        padding:0px 0px 25px 0px !important;
    }

    #content p, #content h1, #content h2, #content h3, #content h4, #content h5, #content h6 {
        padding: 25px 25px 0px 25px !important;
        margin: 0px !important;
        min-width: 100%;
        align-items: center;
        text-align: left;
        display: inline-block;
    }

    #content p {
        display:inline-block;
        width:100%;
    }

    #content > .section {
        margin-bottom:25px;
    }

    .card-body img {
        margin:0px;
        border-radius:2px;
        @if(isset($post->content()->body->width) && $post->content()->body->width == "full") max-width: 100% !important; @else max-width: 50% !important; @endif
        border-radius: 2px;
        margin-top:25px;
        display: inline-block;
        min-width: unset;
        width: 100%;
    }

    .card-body p < img {
        text-align: center !important;
    }

    #content-row {
        width:100%;
    }
    @media(max-width:991px) {
        #content-row {
            padding:15px;
        }
        #content-row > .card {
            padding:15px !important;
            border-radius:4px !important;
        }

        #content-row > .card.full-width {
            border-radius:0px !important;
        }
    }

    .vjs-afterglow-skin.vjs-responsive {
        border-radius:4px !important;
    }

    .vjs-afterglow-skin.vjs-responsive, .vjs-afterglow-skin.vjs-responsive video {
        width: 100%;
        height: none;
        max-height: 540px;
    }

    .centered {
        text-align:center !important;
    }

    #engage {
        background:#fff !important;
        color:#222 !important;
    }

    #engage:hover {
        background:#222 !important;
        color:#fff !important;
        border-color:#222 !important;
    }

    #engage p{
        margin:0px;
        padding:0px;
        text-shadow:none !important;
    }

    .page-header {
        height:100vh !important;
    }

    @media screen and (max-width: 991px) {
        .page-header h1 {
            font-size:35px !important;
        }
        .page-header #engage {
            padding:10px 20px !important;
        }
    }

    .page-header-small{
        min-height:66vh !important;
        height:66vh !important;
    }
    #featuredImage{
        min-height:500px;
        width:100%;
        background-size:cover !important;
        border-radius:4px;
        background-position:center center !important;
    }

    @media screen and (max-width: 991px) {
        #contentBody {
            border-radius:0px !important;
        }
        #featuredImage{
            min-height:250px;
            border-radius:0px !important;
            background-position: center center;
        }
        .card-body img {
            max-width: 100% !important;
        }
        .card-header {
            padding-top:5px !important;
        }
    }

    #content a{
        padding: 0px 5px 0px 5px;
        transition: background 0.25s, border 0.25s, box-shadow 0.25s, color 0.25s;
        border-radius: 0px;
        margin:0px !important;
        text-align: center;
        color: #333 !important;
        border-bottom: 4px solid transparent !important;
        background: #ffe6079c !important;
        text-decoration: none !important;
        box-shadow: none;
        display: inline !important;
        border-top:4px solid transparent;
    }
    #content a:hover {
        background: #6affa3 !important;
        text-decoration:none !important;
        border-top:4px solid transparent;
    }

    div[role=tooltip] {
        background:#fff !important;
        opacity:1 !important;
    }

    #content li p {
        padding:25px 25px 0px 25px !important;
        border-left: #eee 5px solid;
    }

    #content ul {
        list-style:none !important;
        margin-bottom:0px !important;
        padding:25px 25px 0px 25px !important;
    }

    #content ul li {
        margin:15px;
    }

    a.badge {
        border-color:royalblue;
        color:royalblue;
    }

    a.badge:hover,a.badge:focus,a.badge:active {
        text-decoration:none !important;
        color: #fff;
        background:royalblue;
        border-color:royalblue;
    }

    #content-row .card-body img {
        border-radius:4px;
    }

    .card-image {
        width: 350px;
        max-width: 90%;
        margin: 25px 0px !important;
        box-shadow: none;
        border: 1px solid #dae9ff;
    }

    #content-row .card .card-image {
        margin-top: 25px !important;
        margin-bottom: 0px !important;
    }

    .card-image .card-body {
        min-height:350px;
        background-size:cover;
        background-position:center center;
    }

    .card-image .card-footer {
        background: #dae9ff;
        color: #444;
        font-weight: 600;
        border-top: 1px solid #c1daff;
    }

    .image-container {
        min-height: 350px;
        width: 100%;
        background-size: cover !important;
        background-position: center !important;
    }

    blockquote {
        margin: 25px 25px 0px 25px !important;
        padding: 5px 5px 25px 5px !important;
        border-radius: 5px;
        background: #f1fff6;
    }

    .img-raised {
        box-shadow:0px 5px 12px 0px rgba(0, 0, 75, 0.15);
    }

    .card.full-width {
        border-radius:0px !important;
    }

    .container-fluid.full-width {
        padding-left:0px !important;
        padding-right:0px !important;
    }

    #author {
        background: none !important;
        border:2px solid rgb(235, 242, 255);
    }

    #author.filled {
        /*background:rgb(235, 242, 255) !important;*/
    }

    #author #name {
        background: rgba(66, 150, 255, 0.15);
        border-radius: 25px;
        padding: 5px 10px;

    }
</style>