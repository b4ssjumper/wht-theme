<article>
    <?php
    if (has_post_thumbnail()) {
        printf(
            '<div class="thumbnailwrap thumbnailwrap--zoom"><a href="%s">%s</a></div>',
            get_the_permalink(),
            get_the_post_thumbnail(get_the_ID(), 'medium')
        );
    }

    printf(
        '<span class="postdate">%s</span>',
        get_the_date()
    );

    printf(
        '<h3><a href="%s">%s</a></h3>',
        get_the_permalink(),
        get_the_title()
    );
    ?>
</article>