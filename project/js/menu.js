$(function() {
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 500);
				return false;
			}
		}
	});
});

$(window).scroll(function(){
	w = Math.floor($(window).scrollTop());
	if(w < $('#features').offset().top){
		$('.navbar-nav>li').removeClass('active');
		$('.navbar-nav>li#m1').addClass('active');
	}else if(w < $('#community').offset().top){
		$('.navbar-nav>li').removeClass('active');
		$('.navbar-nav>li#m2').addClass('active');
	}else{
		$('.navbar-nav>li').removeClass('active');
		$('.navbar-nav>li#m3').addClass('active');
	}
});
