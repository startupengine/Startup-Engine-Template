                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if($post->content() !== null && isset($post->content()->body->fullwidth)) { ?>
        {!!  $post->markdown($post->content()->body->fullwidth) !!}
    <?php } ?>

    <script>
        $( document ).ready(function() {
            $( "p:has(img)" ).addClass('centered');
        });
    </script>

</body>