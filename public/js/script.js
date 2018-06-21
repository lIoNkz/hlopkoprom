
$('#bar').click(function() {
  $(this).toggleClass('change');
  $('.sidemenu a:eq(0)').toggleClass('showlink');
  setTimeout(function() {
    $('.sidemenu a:eq(1)').toggleClass('showlink');
  }, 100);
  setTimeout(function() {
    $('.sidemenu a:eq(2)').toggleClass('showlink');
  }, 200);
  setTimeout(function() {
    $('.sidemenu a:eq(3)').toggleClass('showlink');
  }, 300);
});
$('.bartext').click(function() {
  $('#bar').toggleClass('change');
  $('.sidemenu a:eq(0)').toggleClass('showlink');
  setTimeout(function() {
    $('.sidemenu a:eq(1)').toggleClass('showlink');
  }, 100);
  setTimeout(function() {
    $('.sidemenu a:eq(2)').toggleClass('showlink');
  }, 200);
  setTimeout(function() {
    $('.sidemenu a:eq(3)').toggleClass('showlink');
  }, 300);
});





