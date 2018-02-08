<article <?php post_class('mb-5'); ?>>
  <header>
    <h5 class="entry-title d-block"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
