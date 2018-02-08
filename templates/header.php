<header class="banner" id="mds-banner">
  <div class="container">

      <nav class="nav-primary fixed-top navbar navbar-expand-md navbar-light bg-light " id="mds-nav">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <?php
          $searchForm = '<form class="form-inline my-2 my-lg-0">' .
              '<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">'.
              '<button class="btn btn-link my-2 my-sm-0" type="submit"><i class="material-icons">search</i></button>'.
              '</form>';
          if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav mr-auto',
                  'container_class'=>'collapse navbar-collapse', 'container_id' => 'navbarSupportedContent',
                  'link_before'=>'<span class="mds-nav-link">', 'link_after'=>'</span>',
                  'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>' . $searchForm
              ]);
          endif;
          ?>
      </nav>

  </div>
</header>
