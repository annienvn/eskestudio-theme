<?php
/**
 * Template: Index / Archive
 * 
 * This is the fallback template. WordPress uses it for
 * category archives (e.g. /category/vancouver/),
 * tag archives, search results, etc.
 * 
 * It displays posts in the same grid layout as the homepage.
 */
get_header();
?>

  <!-- ARCHIVE HEADER -->
  <section class="hero">
    <?php if (is_category()) : ?>
      <p class="hero-tagline"><?php single_cat_title(); ?></p>
    <?php elseif (is_search()) : ?>
      <p class="hero-tagline">Search results for "<?php echo get_search_query(); ?>"</p>
    <?php else : ?>
      <p class="hero-tagline">stories, places, work</p>
    <?php endif; ?>
    <div class="hero-scroll-line"></div>
  </section>

  <!-- SECTION HEADER -->
  <div class="section-header">
    <?php if (is_category()) : ?>
      <span class="section-label"><?php printf('%s posts', single_cat_title('', false)); ?></span>
    <?php else : ?>
      <span class="section-label">All posts</span>
    <?php endif; ?>
  </div>

  <!-- POST GRID -->
  <div class="post-grid">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article class="post-card">
        <a href="<?php the_permalink(); ?>">
          <div class="post-card-image">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('post-grid-square'); ?>
            <?php endif; ?>
          </div>
          <div class="post-card-body">
            <?php
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

    <?php endwhile; endif; ?>

  </div>

  <!-- PAGINATION -->
  <div class="load-more-wrapper">
    <?php
    // WordPress built-in pagination
    the_posts_pagination(array(
      'mid_size'  => 1,
      'prev_text' => '&larr;',
      'next_text' => '&rarr;',
    ));
    ?>
  </div>

<?php get_footer(); ?>
