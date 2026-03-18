<?php
/**
 * Template Name: Front Page
 * 
 * This is your homepage. WordPress automatically uses front-page.php
 * when it exists. The post grid below uses WP_Query to pull the
 * 6 most recent posts from the "Escapes" category.
 */
get_header();
?>

  <!-- HERO -->
  <section class="hero">
    <p class="hero-tagline">stories, places, work</p>
    <div class="hero-scroll-line"></div>
  </section>

  <!-- SECTION HEADER -->
  <div class="section-header">
    <span class="section-label">Recent posts</span>
  </div>

  <!-- POST GRID -->
  <div class="post-grid">

    <?php
    // Custom query: pull 6 most recent posts from "escapes" category.
    // To show ALL categories instead, remove the 'category_name' line.
    $homepage_posts = new WP_Query(array(
      'posts_per_page'   => 6,
      'category_name'    => 'escapes',
      'post_status'      => 'publish',
    ));

    if ($homepage_posts->have_posts()) :
      while ($homepage_posts->have_posts()) : $homepage_posts->the_post();
    ?>

      <article class="post-card">
        <a href="<?php the_permalink(); ?>">
          <div class="post-card-image">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('post-grid-square'); ?>
            <?php endif; ?>
          </div>
          <div class="post-card-body">
            <?php
            // Get the first category for this post
            $categories = get_the_category();
            if (!empty($categories)) :
            ?>
              <span class="post-card-category"><?php echo esc_html($categories[0]->name); ?></span>
            <?php endif; ?>
            <h2 class="post-card-title"><?php the_title(); ?></h2>
            <time class="post-card-date"><?php echo get_the_date('F j, Y'); ?></time>
          </div>
        </a>
      </article>

    <?php
      endwhile;
      wp_reset_postdata();
    endif;
    ?>

  </div>

  <!-- LOAD MORE -->
  <div class="load-more-wrapper">
    <a href="<?php echo esc_url(get_category_link(get_cat_ID('escapes'))); ?>" class="load-more-btn">
      View all posts
    </a>
  </div>

<?php get_footer(); ?>
