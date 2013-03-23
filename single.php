<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_post_thumbnail(); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>
<?php else: ?>
  <p>Nothing to see here. Move along.</p>
<?php endif; ?>

<?php get_footer(); ?>