<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap container" role="document">
      <div class="content row justify-content-center">
        <div class="col-md-8 mds-col-middle">
            <main class="main">
              <?php include Wrapper\template_path(); ?>
                <?php get_template_part('templates/pagination') ?>
            </main><!-- /.main -->
        </div>
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  <script>

      function asdfe(){
          jQuery('.mds-col-left').removeClass('col-md-2').addClass('col-md-1');
          jQuery('.mds-col-middle').removeClass('').addClass('');
          jQuery('.mds-col-right').removeClass('col-md-2').addClass('col-md-3');
      }

      jQuery('#mds-nav').headroom();
//      jQuery('#mds-nav').headroom({
//          "offset": 205,
//          "tolerance": 5,
//          "classes": {
//              "initial": "animated",
//              "pinned": "slideDown",
//              "unpinned": "slideUp"
//          }
//      });
//
//      jQuery('#mds-nav').headroom('destroy');

  </script>
  </body>
</html>
