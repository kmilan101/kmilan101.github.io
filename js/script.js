
$(function() {

		$(window).scroll(function(){
			if ($(this).scrollTop() > 100)
				{$('.scrollup').fadeIn();}
			else 
				{$('.scrollup').fadeOut();}
		});
		
		//Click event to scroll to top
		$('.scrollup').click(function(){
			$('html, body').animate({scrollTop : 0},800);
			return false;
		});

		
		$(window).load(function(){ 
			window.scrollTo(0,0);
			$('.scrollup').fadeOut(300);
			$('#loading').fadeOut(300);
		 });

		$(window).resize(function(){
			
		});
	}
