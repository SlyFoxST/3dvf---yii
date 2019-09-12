var time = 2, cc=1;
$(window).scroll(function(){

$('#counter').each(function(){

  var cPos = $(this).offset().top,
      topWindow = $(window).scrollTop();
      if (cPos < topWindow + 600){
        if(cc < 2){
  $('div').each(function(){
    var 
    i = 1,
    num = $(this).data('num'),
    step = 1000 * time / num,
    that = $(this),
    int = setInterval(function(){
      if (i <= num) {
        that.html(i);
      }
      else {
        clearInterval(int);
        cc = cc+2;
      }
      i++;
    },step);
  });
}
}
});
});