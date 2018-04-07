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
		animation.setSpeed(3);
		$(slideDown).hover(function() {
			var status = $(plus).next('ul').attr('style');
			hoverToggle(1, [0,15], status);
			$(slideDown).animate({
				color: '#7a8b99',
			}, 150);
		}, function()
		{
			var status = $(plus).next('ul').attr('style');
			hoverToggle(-1, [15,0], status);
			$(slideDown).animate({
				color: '#212529',
			}, 150);
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
				animation.setDirection(1);
				animation.playSegments([15,49], true);
			} else {
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