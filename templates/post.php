<div id="content">
  <div class="row">
      <div class="col-12 col-md-8">
        <h2 class=single-post-header>
          <?php _e('Aktuelles', 'wht') ?>
        </h2>
        <div>
            <div class=currentjob-title>
              <?php the_title(); ?>
            </div>
            <div class="currentjob-date">
              <i class="far fa-clock"></i>
              <?php the_date(); ?>
            </div>
            <div class="currentjob-image">
              <?php the_post_thumbnail('full'); ?>
            </div>
            <div class="currentjob-content">
                <?php the_content(); ?>
            </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <?php get_template_part('templates/sidebar'); ?>
      </div>
  </div>
</div>
