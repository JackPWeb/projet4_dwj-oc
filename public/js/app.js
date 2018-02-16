$(document).ready(function(){
	
	/**
	* ----------------------------------------------------------------------------------------
	*    Mobile sidenav materialize
	* ----------------------------------------------------------------------------------------
	*/

	$(".button-collapse").sideNav();

	/**
	* ----------------------------------------------------------------------------------------
	*    Parallax materialize
	* ----------------------------------------------------------------------------------------
	*/

	$('.parallax').parallax();

	/**
	* ----------------------------------------------------------------------------------------
	*    Tooltip materialize
	* ----------------------------------------------------------------------------------------
	*/

	$('.tooltipped').tooltip();

	/**
	* ----------------------------------------------------------------------------------------
	*    Toggle Flow Text
	* ----------------------------------------------------------------------------------------
	*/

    var toggleFlowTextButton = $('#flow-toggle');

    toggleFlowTextButton.click( function(){
      $('.post-content').children('p').each(function(){
          $(this).toggleClass('flow-text');
        });
    });

    /**
	* ----------------------------------------------------------------------------------------
	*    Show Toggle Flow Text button on single post when user scroll
	* ----------------------------------------------------------------------------------------
	*/

  	var options = [
        
		{selector: '#flow-toggle', offset: 299, callback: function() {
			$(window).scroll(function(){
				if ($(window).scrollTop() > 300){
					$('#flow-toggle').removeClass('slideOutLeft').addClass('slideInLeft');
				}
				else{
					$('#flow-toggle').removeClass('slideInLeft').addClass('slideOutLeft');
				}
			});    
        }},
  	];

  	Materialize.scrollFire(options);

  	/**
	* ----------------------------------------------------------------------------------------
	*    Detect bottom of page and hide/show - flow toggle / Back to top
	* ----------------------------------------------------------------------------------------
	*/

  	window.onscroll = function() {
  		var d = document.documentElement;
	  	var offset = d.scrollTop + window.innerHeight;
	  	var height = d.offsetHeight;

	  	if (offset === height) {
	    	$('#flow-toggle').removeClass('slideInLeft').addClass('slideOutLeft');
	    	$('#back-to-top').removeClass('slideOutLeft').addClass('slideInLeft');
	  	}
	  	else{
	  		$('#back-to-top').removeClass('slideInLeft').addClass('slideOutLeft');
	  	}
	};

	/**
	* ----------------------------------------------------------------------------------------
	*    Back to top
	* ----------------------------------------------------------------------------------------
	*/

	var backtotop = $('#back-to-top');

	backtotop.click(function(event){
		$('html, body').animate({scrollTop:0},'10000');
		event.preventDefault();
	});

	/**
	* ----------------------------------------------------------------------------------------
	*    Scroll To About Jean
	* ----------------------------------------------------------------------------------------
	*/

	$('a.scroll[href*=#]:not([href=#])').click(function () {
	    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
	        
	        var target = $(this.hash);

	        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

	        if (target.length) {
	            $('html,body').animate({
	                scrollTop: target.offset().top - 120
	            }, 1000);

	            return false;
	        }
	    }
	});

	/**
	* ----------------------------------------------------------------------------------------
	*    Animated Nav on scroll down/up
	* ----------------------------------------------------------------------------------------
	*/

	var prev = 0;
	var $window = $(window);
	var nav = $("nav");

	$window.on("scroll", function() {
  		var scrollTop = $window.scrollTop();
  		nav.toggleClass("hidden", scrollTop > prev);
  		prev = scrollTop;
	});

});