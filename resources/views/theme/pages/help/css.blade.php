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

    .v-paginator .btn {
        border-radius:25px !important;
        margin-right:5px !important;
        margin-left:5px !important;
        min-width:100px !important;
    }
</style>

@if($page->content()->code->css !== null){!! $page->content()->code->css  !!} @endif

@if(isset($tag) && $tagContent !== null && $tagContent->content() !== null && $tagContent->content()->code !== null && $tagContent->content()->code->css !== null)
    {!! $page->content()->code->css  !!}
@endif

<script src="https://cdnjs.cloudflare.com/ajax/libs/vuejs-paginator/2.0.0/vuejs-paginator.js"></script>

