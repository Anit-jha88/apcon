;(function($) {
    'use strict';
    $(activate);
  
    function activate() {
      $('.nav-tabs').scrollingTabs({
        enableSwiping: true,
        scrollToTabEdge: false,
        disableScrollArrowsOnFullyScrolled: true,
        infinite: true,
      })
        .on('ready.scrtabs', function() {
        $('.tab-content').show();
      });
    }
  }(jQuery));
  