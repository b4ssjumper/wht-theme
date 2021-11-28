<?php get_header(); ?>

<?php
$themeMods = get_fields('option');
if (has_category('karriere') && !empty($themeMods['preview_karriere'])) {
    print '<div class="wrapper wrapper--styled wrapper--preview">';
    print wp_get_attachment_image($themeMods['preview_karriere']['ID'], 'full');
    print '</div>';
} elseif (!empty($themeMods['preview_aktuelles'])) {
    print '<div class="wrapper wrapper--styled wrapper--preview">';
    print wp_get_attachment_image($themeMods['preview_aktuelles']['ID'], 'full');
    print '</div>';
}
?>

<div class="wrapper wrapper--styled">
	<div id="main">
		<?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
        }

        if (in_category('karriere')) {
            get_template_part('templates/post', 'karriere');
        } else {
            get_template_part('templates/post');
        }
        ?>
	</div>
</div>

<?php
get_footer();
