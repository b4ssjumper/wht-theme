<?php get_header(); ?>

<?php
$themeMods = get_fields('option');
if (!empty($themeMods['preview_aktuelles'])) {
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
    ?>
		<div id="content">
			<h1 class="entry-title">
				<?php single_post_title(); ?>
			</h1>
			<ol class="postlist postlist--column">
				<?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        print '<li>';
                        get_template_part('templates/loop', 'medium');
                        print '</li>';
                    }
                }
                ?>
			</ol>
			<div id="content__pagination">
				<?php
				$args = [
					'screen_reader_text' => __('Beitragsnavigation', 'wht'),
					'next_text' => '',
					'prev_text' => '',
				];
				the_posts_pagination($args);
				?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
