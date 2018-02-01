<style>
    .page-header-image {
        background: #000;
    }
    @media screen and (max-width: 991px) {
        .page-header {
            min-height: 440px !important;
        }
    }

    input#s {
        -webkit-border-radius: 7px;
        -moz-border-radius: 7px;
        border-radius: 5px !important;
        padding:20px !important;
        background:rgba(0,0,0,0.25) !important;
        border:none !important;
        color:#fff !important;
        font-size:16px;
        font-weight:400 !important;
    }

    input#s:hover,input#s:focus {
        background: #fff !important;
        color:#777 !important;
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
</style>

@if($page->content()->code->css !== null){!! $page->content()->code->css  !!} @endif

<script src="https://cdnjs.cloudflare.com/ajax/libs/vuejs-paginator/2.0.0/vuejs-paginator.js"></script>

