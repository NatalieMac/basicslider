<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
  <div id="slideshow">
    <ul class="bjqs">
      <?php while ( have_posts() ) : the_post(); ?>
        <li>
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <h2 class="slideshow-caption"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>
<?php else: ?>
  <p>Nothing to see here. Move along.</p>
<?php endif; ?>

<?php get_footer(); ?>