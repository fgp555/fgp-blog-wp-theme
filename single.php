<!-- ========== single.php ========== -->
<?php get_header(); ?>
<section class="hero" style="background-image: url('<?php if (has_post_thumbnail()) {
                                                      the_post_thumbnail_url();
                                                    } else {
                                                      echo get_post_meta($post->ID, 'custom_feature_img', true);
                                                    }  ?>')">
  <h2>Frank GP — Web Architec</h2>
  <p>Documentacion frontend</p>
  <form action="<?php echo esc_url(home_url()); ?>" method="get">
    <input type="text" placeholder="Que quieres Buscar" name="s">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>
  <hr>
</section>
</header>
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
          <div class="blog-data">
            <span><i class="fa fa-folder-open" aria-hidden="true"></i> <?php echo get_the_category_list(','); ?></span>
            <span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('j M Y'); ?></span>
            <?php setPostViews(get_the_ID()); ?>
            <span><?php echo getPostViews(get_the_ID()); ?></span>
            <hr>
          </div>

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