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
            <main class="">
              <?php include Wrapper\template_path(); ?>
                <?php get_template_part('templates/pagination') ?>
            </main><!-- /.main -->
        </div>
      </div><!-- /.content -->
        <?php if (Setup\display_sidebar()) : ?>
            <aside class="sidebar collapse mds-sibebar" id="collapseExample">
                <?php include Wrapper\sidebar_path(); ?>
            </aside><!-- /.sidebar -->
        <?php endif; ?>
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  <script>

      function xianshishi(){
          jQuery('.container .content').toggleClass('justify-content-center');
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
