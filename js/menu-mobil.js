$(document).ready(function()
{
	$('.hamburger').hide();
	$('h1').click(function()
	{
		$('.hamburger').show(0);
		if ($('.hamburger').attr('style') == '')
		{
			$(document).click(function()
			{
				alert('ok');
			});
		}
	});

});