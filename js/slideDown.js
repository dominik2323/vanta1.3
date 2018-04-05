$(document).ready(function() 
{
	var plus = document.getElementsByClassName("plus");
	var slideDown = document.getElementsByClassName('slideDown');
	function loadAnimation(plus, slideDown)
	{
		var animation = lottie.loadAnimation({
			container: plus,
			renderer: "svg",
			loop: false,
			autoplay: false,
			path: "../json/plus.json"
		});	

		$(slideDown).hover(function() {
			var status = $(plus).next('ul').attr('style');
			hoverToggle(1, [0,15], status);
		}, function()
		{
			var status = $(plus).next('ul').attr('style');
			hoverToggle(-1, [15,0], status);
		});

		$(slideDown).click(function() {			
			var status = $(plus).next('ul').attr('style');
			$(plus).next('ul').slideToggle(100);
			clickToggle(status);
		});

		function hoverToggle(direction, frames, status) 
		{
			if (status == 'display: none;') 
			{
				animation.setSpeed(3);
				animation.setDirection(direction);
				animation.playSegments(frames, true);
			} else {
				animation.playSegments([49,49], true);
			}
		}

		function clickToggle(status)
		{
			if (status == 'display: none;') 
			{
				animation.setSpeed(2);
				animation.setDirection(1);
				animation.playSegments([15,49], true);
			} else {
				animation.setSpeed(2);
				animation.setDirection(-1);
				animation.playSegments([49,15], true);
			}
		}
	}	

	for (var i = 0; i < plus.length; i++) 
	{
		loadAnimation(plus[i], slideDown[i]);
	}
});