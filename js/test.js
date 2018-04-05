$(document).ready(function()
{
	$('.foot').remove();
	$('.button').click(function()
	{
		var id = $(this).attr('id');
		$(this).next().children().slideToggle(100);
	});
});