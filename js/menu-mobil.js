$(document).ready(function()
{
showMenu();
function showMenu()
{
	$('.hamb').click(function(e)
	{
		e.stopPropagation();
		$('.nav>a:not(:last-child)').addClass('show');
		hideMenu();
	});
}
function hideMenu()
{
	$('.hamb, body').click(function()
	{
		$('.nav>a:not(:last-child)').removeClass('show');
		showMenu();
	});
}
});