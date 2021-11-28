<?php
get_header();

$slides = get_field('slides');
if (!empty($slides)) {
    ?>
<div class="wrapper wrapper--styled wrapper--preview">
    <div id="front-slider" class="slider__wrapper">
        <?php
        foreach ($slides as $slide) {
            if (!empty($slide['img'])) {
                printf(
                    '<div class="slider__slide" style="background-image:url(%s);">',
                    wp_get_attachment_image_src($slide['img']['ID'], 'full')[0]
                );
                if (!empty($slide['text'])) {
                    printf(
                        '<div class="slider__content %s">',
                        $slide['flip'] ? 'slider__content--flipped' : ''
                    );
                    foreach (explode("\n", $slide['text']) as $content) {
                        printf('<div class="slider__content--block"><h3 class="slider__content--highlight">%s</h3></div>', $content);
                    }
                    print '</div>';
                }
                print '</div>';
            }
        } ?>
    </div>
</div>
<?php
}
?>

<div class="wrapper wrapper--styled">
	<div id="main">
        <div id="content">
            <?php get_template_part('templates/loop', 'page-front'); ?>
        </div>
	</div>
</div>

<div class="wrapper wrapper--styled" id="home-posts">
    <div class="row">
        <div class="col-12">
            <a href="<?php print get_permalink( get_option( 'page_for_posts' ) );; ?>" class="home-posts__title">
                <span class="fa__block fa__block--blue"><i class="fas fa-bullhorn"></i></span>
                <div class="block-header"> <?php _e('Aktuelles', 'wht'); ?> </div>
            </a>
        </div>
    </div>
    <div class="row">
        <?php
        $args = [
            'posts_per_page' => 4,
        ];
        $query = new WP_Query($args);
        while ($query->have_posts()) {
            $query->the_post();
            print '<div class="col-12 col-sm-6 col-md-3">';
            get_template_part('templates/loop', 'small');
            print '</div>';
        }
        wp_reset_postdata();
        ?>
    </div>
</div>
<?php
get_footer();
