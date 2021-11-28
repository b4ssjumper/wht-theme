<?php
/**
 * Template Name: Job
 */
get_header( 'blank' );
?>

<?php
if (has_post_thumbnail()) {
    print '<div class="wrapper wrapper--styled wrapper--preview">';
    the_post_thumbnail('full');
    print '</div>';
}
?>

<div class="wrapper wrapper--styled">
	<div id="main">
		<div id="content">
		  	<?php
            get_template_part('loop', 'page');
            ?>
		</div>
	</div>
</div>

<?php
get_footer( 'blank' );
