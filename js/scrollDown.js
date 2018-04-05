$(document).ready(function()
{	
	var anim = lottie.loadAnimation(
		{
			wrapper: document.getElementById('scrollDown'),
			renderer: 'svg',
			loop: false,
			autoplay: false,
			path: '../json/scrollDown.json',
		});
	
	anim.setSpeed(4);

	$('#scrollDown').hover(function()
	{
		anim.setDirection(1);
		anim.play();		
	}, function ()
	{
		anim.setDirection(-1);
		anim.play();
	});	

	$('#scrollDown').click(function()
	{
		var height = $('.intro').outerHeight(true);
        $('body').stop().animate(
        {
            scrollTop: height
        }, 500, 'swing');
	});
});
