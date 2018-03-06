<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('mt-4'); ?>>
    <header>
        <h5 class="entry-title d-block"><?php the_title(); ?></h5>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
