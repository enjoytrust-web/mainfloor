(function(win, doc) {

  "use strict";

  var timer = setInterval(function() {
    var timeline = doc.getElementById("twitter-widget-0");
    if (timeline) {
      if (timeline.contentDocument.querySelector(".timeline-Widget")) {
        clearInterval(timer);
        timeline.contentDocument.querySelector(".timeline-Widget").style["max-width"] = "none";
      }
    }

  }, 100);
})(this, document);



/*==============================
-Trigger Animation
===============================*/
$(function(){
  $('.c-navmenu-trigger').click(function(){
    $('.c-sharemenu-trigger').removeClass('is-active');
    $('.c-sharemenu').removeClass('is-active');
    $('.fa-share-alt').removeClass('is-active');
    $(this).toggleClass('is-active');
    $('.c-navmenu-trigger-line').toggleClass('is-active');
    $('.c-navmenu').toggleClass('is-active');
  });
});

$(function(){
  $('.c-sharemenu-trigger').click(function(){
    $('.c-trigger').removeClass('is-active');
    $('.c-trigger-line').removeClass('is-active');
    $('.c-navmenu').removeClass('is-active');
    $(this).toggleClass('is-active');
    $('.c-sharemenu').toggleClass('is-active');
    $('.fa-share-alt').toggleClass('is-active');
  });
});