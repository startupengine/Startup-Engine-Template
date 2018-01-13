<!-- Footer -->
@if(setting('theme.footer_html') !== null)
    <?php echo setting('theme.footer_html'); ?>
@elseif(setting('theme.footer_headline') !== null)
<div class="section bg-gradient-light" id="global-footer" style="background:#fff;color:#222;width:100%;margin-top:50px;">
    <div class="container text-center">
        <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-8">
                <h2 class="title">@if(setting('theme.footer_headline') !== null){{setting('theme.footer_headline')}}@endif</h2>
                <h5 class="description" style="color:#fff;font-weight:300;margin-bottom:35px;">@if(setting('theme.footer_body') !== null){{setting('theme.footer_body')}}@endif</h5>
                @if(setting('theme.footer_link') !== null)<a href="{{setting('theme.footer_link')}}" class="btn btn-neutral btn-lg" onclick="mixpanel.track('cta');"><i class="now-ui-icons arrows-1_share-66"></i> @if(setting('theme.footer_button') !== null){{setting('theme.footer_button')}}@endif</a>@endif
            </div>
        </div>
    </div>
</div>
@endif
<!-- End Footer -->
</body>