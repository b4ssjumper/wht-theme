
<div class="wrapper wrapper--styled">
	<div id="footer">
		<div class="row">
			<?php
			if (is_active_sidebar('first-footer-widget-area')) {
				print '<div class="col-12 col-md-6 footer_widget">';
				printf(
					'<h3 class="widget-title">%s</h3>',
					__('Partner', 'wht')
				);
				print '<ul class="first-footer-icons">';
				dynamic_sidebar('first-footer-widget-area');
				print '</ul>';
				print '</div>';
			}
			?>
			<div class="col-12 col-md-6 footer__contact">
				<?php
				$themeMods = get_fields('option');
				?>
				<h3 class="widget-title"><a href="<?php the_permalink(252); ?>"><?php _e('Kontaktieren Sie uns', 'wht'); ?></a></h3>
				<div class="row">
					<div class="col-12 col-sm-6">
						<div class="row">
							<div class="col-2">
								<i class="fas fa-map-marker-alt"></i>
							</div>
							<div class="col-10">
								<?php print $themeMods['address']; ?>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6">
						<div class="row">
							<div class="col-2">
								<i class="fas fa-phone"></i>
							</div>
							<div class="col-10">
								<a href="tel:+49<?php echo ltrim(str_replace([' ', '-'], '', $themeMods['telephone']), '0'); ?>">
								<?php print $themeMods['telephone']; ?>
		</a>
							</div>
						</div>
						<div class="row">
							<div class="col-2">
								<i class="fas fa-fax"></i>
							</div>
							<div class="col-10">
								<?php print $themeMods['fax']; ?>
							</div>
						</div>
						<div class="row">
							<div class="col-2">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-10">
								<?php
								printf(
					'<a href="mailto:%1$s">%1$s</a>',
					$themeMods['email']
								);
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- #footer -->
</div><!-- .wrapper -->

<div class="wrapper">
	<div id="copyright">
		<div class="copyright__left">
			<?php
            printf(
                                '<a href="%s">&copy; %u %s - %s.</a>',
                                get_bloginfo('wpurl'),
                                date('Y'),
                                get_bloginfo('name'),
                                get_bloginfO('description')
            );
            wp_nav_menu(
                array(
                    'container_class' => 'quicklinks',
                    'theme_location'  => 'footer_quicklinks',
                )
            );
            ?>
		</div>
		<div class="copyright__right">
			<ul id="copyright__right--social">
				<?php
                $locations = get_nav_menu_locations();
                if (isset($locations['footer_social'])) {
                    $menu = get_term($locations['footer_social'], 'nav_menu');
                    $items = wp_get_nav_menu_items($menu);
                    foreach ($items as $item) {
                        if ($item->title === 'facebook') {
                            printf(
                                '<li><a href="%s" target="_blank" title="Facebook" class="fa__block fa__block--transparent"><i class="fab fa-facebook-f"></i></a></li>',
                                $item->url
                            );
                        }
                    }
                }
                ?>
			</ul>
		</div>
	</div>
</div>

<?php
    wp_footer();
?>
</body>
</html>
