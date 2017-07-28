$(document).ready(function(){

  var w = $('.dep').width();
  var max = parseInt(w)*parseInt($('.dep').length);
  var go = 0;

  $('.dep').width(w);
  $('#depContainer,.depMask').height($('.dep').height());
  $('.depMask').width(max);

  $('#prev').on('click', function(){
    if(go>0) go -= w;
    $('.depMask').css('margin-left', '-'+go+'px');
  });

  $('#next').on('click', function(){
    if(go<parseInt(max-w)) go += w;
    $('.depMask').css('margin-left', '-'+go+'px');
  });

});
