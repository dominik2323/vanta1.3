$(document).ready(function()
{
	$('.hamb').click(function(e)
	{
		e.stopPropagation();
		$('.nav>a').css('display', 'block');
		hideMenu();
	});
	
});
function hideMenu()
{	
	$('body').click(function()
	{
		$('.nav>a:not(:last-child)').css('display', 'none');
	});
}