<?php
/**
 * Template: Default Page
 * 
 * Used for any WordPress Page that doesn't have a specific
 * template file (like page-portfolio.php or page-about.php).
 * Displays the page title and content in a clean, centered layout.
 */
get_header();

if (have_posts()) : while (have_posts()) : the_post();
?>

  <header class="single-post-header">
    <h1 class="single-post-title"><?php the_title(); ?></h1>
  </header>

  <article class="single-post-content">
    <?php the_content(); ?>
  </article>

<?php
endwhile;
endif;

get_footer();
?>
