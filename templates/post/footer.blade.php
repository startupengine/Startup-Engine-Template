                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if($post->content() !== null && $post->content()->body->fullwidth !== null){ ?>
        {!!  $post->markdown($post->content()->body->fullwidth) !!}
    <?php } ?>

</body>