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

