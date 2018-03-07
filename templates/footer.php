<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>
<div class="mds-toggle-sidbar d-sm-block d-none ">
    <span class="fas fa-bars fa-18 fa-fw"  id="mds-toggle-sidebar" role="button" aria-expanded="true"></span>
    <span class="fas fa-arrow-up fa-18 fa-fw"  id="mds-upward"></span>
</div>

<footer class="content-info mds-footer">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
      
      <div class="row justify-content-center">
          <div class="col-md-8 p-4 mds-footer-content">
              <div class="float-right">
                  <div class="text-right">@<?= date('Y')?> <a class="my-blog-name" href="<?= get_home_url()?>"><?= get_bloginfo( 'name' ) ?></a></div>
                  <div class="text-right mt-1">由<a href="https://wordpress.org" target="_blank">WordPress</a>强力驱动 | 主题-<a href="https://github.com/bugZhang/madashuai" target="_blank">madashuai</a> </div>
                  <div class="text-right mt-1">网站统计：您是第*位访客</div>
              </div>
          </div>
      </div>

  </div>
</footer>