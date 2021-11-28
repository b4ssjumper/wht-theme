<article class="row" class="post">
    <aside class="col-12 col-md-3">
        <?php
        if (has_post_thumbnail()) {
            printf(
                '<div class="thumbnailwrap thumbnailwrap--zoom"><a href="%s">%s</a></div>',
                get_the_permalink(),
                get_the_post_thumbnail(get_the_ID(), 'medium')
            );
        }
        ?>
    </aside>
    <main class="col-12 col-md-9">
        <?php
        printf(
            '<h3 class="post--title"><a href="%s">%s</a></h3>',
            get_the_permalink(),
            get_the_title()
        );

        printf(
            '<span class="postdate">%s</span>',
            get_the_date()
        );

        printf(
            '<div class="postcontent">%s</div>',
            get_the_excerpt()
        );
        ?>
    </main>
</article>