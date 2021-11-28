<?php get_header(); ?>

<?php
if (has_post_thumbnail()) {
    print '<div class="wrapper wrapper--styled wrapper--preview">';
    the_post_thumbnail('full');
    print '</div>';
}
?>

<div class="wrapper wrapper--styled">
	<div id="main">
		<?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
        }
        ?>
		<div id="content">
		  	<?php
            get_template_part('loop', 'page');
            ?>
		</div>
	</div>
</div>

<?php
get_footer();
