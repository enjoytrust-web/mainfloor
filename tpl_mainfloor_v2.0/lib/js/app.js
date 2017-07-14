$(function(){
  var tgElm = $('p'),
    tagType = "span";
  tgElm.each(function(){
    var tgText = $(this).html();
    tgText = tgText.replace(/[「『（【｛［〔〈《]/g, '<' + tagType + ' style="display: inline-block; margin-left: -0.6em;">$&</' + tagType + '>');
    //以下一行を変更
    tgText = tgText.replace(/[」』）】｝］〕〉》。、]/g, '<' + tagType + ' style="display: inline-block; margin-right: -0.6em;">$&</' + tagType + '>');
    $(this).html(tgText);
  });
});

$(function(){
  var tgElm = $('h2'),
    tagType = "span";
  tgElm.each(function(){
    var tgText = $(this).html();
    tgText = tgText.replace(/[「『（【｛［〔〈《]/g, '<' + tagType + ' style="display: inline-block; margin-left: -0.5em;">$&</' + tagType + '>');
    //以下一行を変更
    tgText = tgText.replace(/[」』）】｝］〕〉》。、]/g, '<' + tagType + ' style="display: inline-block; margin-right: -0.5em;">$&</' + tagType + '>');
    $(this).html(tgText);
  });
});


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