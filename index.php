<!-- ========== index.php ========== -->
<?php get_header(); ?>
<main>
  <section>
    <div class="blog-section blog-container">
      <?php
      while (have_posts()) {
        the_post();
      ?>
        <article class="blog-card">
          <div class="blog-data">
            <span><i class="fa fa-folder-open" aria-hidden="true"></i> <?php echo get_the_category_list(','); ?></span>
            <span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('j M Y'); ?></span>
            <span><?php echo getPostViews(get_the_ID()); ?></span>
          </div>

          <a href="<?php the_permalink(); ?>">
            <img src="<?php if (has_post_thumbnail()) {
                        the_post_thumbnail_url();
                      } else {
                        echo get_post_meta($post->ID, 'custom_feature_img', true);
                      }  ?>" alt="">
          </a>
          <div class="blog-content">
            <a href="<?php the_permalink(); ?>">
              <h3><?php the_title(); ?></h3>
            </a>
          </div>
        </article>
      <?php }; ?>
    </div>
    <?php
    the_posts_pagination(array(
      // "next_text" => "<i class='fa fa-chevron-circle-right' aria-hidden='true'></i>",
      "screen_reader_text" => "Paginas",
      "next_text" => "<i class='fa fa-arrow-circle-right' aria-hidden='true'></i>",
      "prev_text" => "<i class='fa fa-arrow-circle-left' aria-hidden='true'></i>"
    ));
    ?>
  </section>
</main>
<?php get_footer(); ?>