!function(o){var e={toggleMenu:function(){o("#mds-nav").headroom()},toggleSidebar:function(){o("body").toggleClass("mds-collapse-home"),o("#mds-nav").toggleClass("mds-collapse-nav"),o("aside.sidebar").toggleClass("collapsed mds-sibebar")},topFunction:function(){document.body.scrollTop=0,document.documentElement.scrollTop=0},loadEvents:function(){e.toggleMenu(),o("#mds-toggle-sidebar").on("click",e.toggleSidebar),o("#mds-upward").on("click",e.topFunction)}};o(document).ready(e.loadEvents)}(jQuery);
//# sourceMappingURL=customizer.js.map
