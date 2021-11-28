<h2 class="sidebar__header">
    <span class="fa__block fa__block--blue"><i class="fas fa-list-ul"></i></span>
     <div class="block-header"> <?php _e('Artikel', 'wht'); ?> </div>
</h2>
<ul class="sidebar__posts">
<?php
$args = [
    'post_type' => 'post',
    'post__not_in' => [get_the_ID()],
];
$query = new WP_Query($args);
while ($query->have_posts()) {
    $query->the_post(); ?>
    <li>
        <a href="<?php the_permalink(); ?>">
            <?php if (has_category('karriere')) {
        print '<i class="fas fa-wrench"></i>';
    } ?>
            <?php the_title(); ?>
        </a>
    </li>
    <?php
}
wp_reset_postdata();
?>
</ul>