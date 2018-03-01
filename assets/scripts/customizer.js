(function($) {
  // Site title
  // wp.customize('blogname', function(value) {
  //   value.bind(function(to) {
  //     $('.brand').text(to);
  //   });
  // });

  var UTIL = {
      toggleMenu: function(){
          $('#mds-nav').headroom();
      },
      toggleSidebar: function(){
          $('body').toggleClass('mds-collapse-home');
          $('#mds-nav').toggleClass('mds-collapse-nav');
          $('aside.sidebar').toggleClass('collapsed mds-sibebar');
      },
      topFunction: function(){
          document.body.scrollTop = 0; // For Safari
          document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
      },
      loadEvents: function(){
          UTIL.toggleMenu();
          $('#mds-toggle-sidebar').on('click', UTIL.toggleSidebar);
          $('#mds-upward').on('click', UTIL.topFunction);
      }
  };

  $(document).ready(UTIL.loadEvents);

})(jQuery);
