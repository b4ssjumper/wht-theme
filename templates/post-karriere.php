<div id="main">
  <div id="content">
    <div class="row">
      <div class="col-12 col-md-4">
				<?php get_template_part('templates/sidebar', 'karriere'); ?>
      </div>
      <div class="col-12 col-md-8">
          <h2 class="career-post-header">
            <?php the_title(); ?>
          </h2>
        <div class="single-post-career">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
