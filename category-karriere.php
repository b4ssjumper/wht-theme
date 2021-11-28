<?php get_header(); ?>

<?php
$themeMods = get_fields('option');
if (!empty($themeMods['preview_karriere'])) {
    print '<div class="wrapper wrapper--styled wrapper--preview">';
    print wp_get_attachment_image($themeMods['preview_karriere']['ID'], 'full');
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
			<div class="row">
				<div class="col-12 col-md-4">
					<?php get_template_part('templates/sidebar', 'karriere'); ?>
				</div>
				<div class="col-12 col-md-8">
						<h2 class="career-post-header">
							<?php print single_cat_title('', false); ?>
						</h2>
					<div class="single-post-career">
						<?php the_archive_description(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
