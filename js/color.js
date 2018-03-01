$(document).ready(function()
{
  $('.remove').remove();
  

  $("div[class^='item']").hover(function()
  {
    var id = $(this).attr('class').slice(-2);
    var filename = $('.item' + id + '>a>img').attr('src').slice(0, -4);
    $('.item' + id + '>a>img').after('<img id="id' + id + '" src="' + filename + '_col.jpg" style="display: none;" />');
    $('#id' + id).fadeIn(300);
  }, function()
  {
      var id = $(this).attr('class').slice(-2);
      $('#id' + id + '').remove();
  });
});