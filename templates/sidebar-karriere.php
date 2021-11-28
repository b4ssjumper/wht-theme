<h2 class="sidebar__header"><a href="<?php print get_category_link(7); ?>">
    <span class="fa__block fa__block--blue"><i class="fas fa-suitcase"></i></span>
    <div class="block-header"> <?php _e('Offene Stellen', 'wht'); ?> </div>
</a></h2>
<ul class="sidebar__posts">
<?php
$args = [
    'post_type' => 'post',
    'category_name' => 'karriere',
    'posts_per_page' => 20,
];
$query = new WP_Query($args);
while ($query->have_posts()) {
    $query->the_post(); ?>
    <li>
        <a href="<?php the_permalink(); ?>">
            <i class="fas fa-wrench"></i>
            <?php the_title(); ?>
        </a>
    </li>
    <?php
}
wp_reset_postdata();
?>
</ul>