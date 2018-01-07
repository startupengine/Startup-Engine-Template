                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if($post->content() !== null && isset($post->content()->footer->content)) { ?>
        {!!  $post->markdown($post->content()->footer->content) !!}
    <?php } ?>

    <script>
        $( document ).ready(function() {
            $( "p:has(img)" ).addClass('centered');
            //$( "#content img" ).attr('data-aos', 'zoom-out');
        });
    </script>

</body>