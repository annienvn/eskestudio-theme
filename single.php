<?php
/**
 * Template: Single Post
 * 
 * This template is used when viewing any individual blog post.
 * It displays the category, title, date, featured image, 
 * and the post content.
 */
get_header();

if (have_posts()) : while (have_posts()) : the_post();
?>

  <!-- POST HEADER -->
  <header class="single-post-header">
    <?php
    $categories = get_the_category();
    if (!empty($categories)) :
    ?>
      <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="single-post-category">
        <?php echo esc_html($categories[0]->name); ?>
      </a>
    <?php endif; ?>

    <h1 class="single-post-title"><?php the_title(); ?></h1>
    <time class="single-post-date"><?php echo get_the_date('F j, Y'); ?></time>
  </header>

  <!-- FEATURED IMAGE -->
  <?php if (has_post_thumbnail()) : ?>
    <div class="single-post-image">
      <?php the_post_thumbnail('large'); ?>
    </div>
  <?php endif; ?>

  <!-- POST CONTENT -->
  <article class="single-post-content">
    <?php the_content(); ?>
  </article>

<?php
endwhile;
endif;

get_footer();
?>
