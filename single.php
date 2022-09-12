<!-- ========== single.php ========== -->
<?php get_header(); ?>

<main>
  <section class="single-section">
    <?php
    while (have_posts()) {
      the_post();
    ?>
      <article class="blog-single" style="max-width: 60rem; margin: 2rem auto;">
        <div class="blog-content">
          <!-- ========== meta box 02... ========== -->
          <img src="<?php if (has_post_thumbnail()) {
                      the_post_thumbnail_url();
                    } else {
                      echo get_post_meta($post->ID, 'custom_feature_img', true);
                    }  ?>" alt="">
          <!-- ========== meta box 02. ========== -->
          <h1><?php the_title(); ?></h1>
          <!-- ========== .blog-data... ========== -->
          <div class="blog-data">
            <span><i class="fa fa-folder-open" aria-hidden="true"></i> <?php echo get_the_category_list(','); ?></span>
            <span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('j M Y'); ?></span>
            <span><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <?php the_modified_date('j M Y'); ?></span>
            <?php setPostViews(get_the_ID()); ?>
            <span><?php echo getPostViews(get_the_ID()); ?></span>
            <hr>
          </div>
          <!-- ========== .blog-data. ========== -->

          <?php
          if (has_excerpt()) {
            the_excerpt();
          }; ?>
          <p><?php the_content(); ?></p>
        </div>
      </article>
    <?php } ?>
  </section>
</main>
<?php get_footer(); ?>