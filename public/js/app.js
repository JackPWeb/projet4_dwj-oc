/**
* ----------------------------------------------------------------------------------------
*    Loader
* ----------------------------------------------------------------------------------------
*/

$(window).on('load', function() {
	setTimeout(function() {
      	$('body').addClass('loaded');
    }, 1000);
});

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
	*    Update Current Nav Link 
	* ----------------------------------------------------------------------------------------
	*/

  	function BeforeLastURL() {
	    var url = window.location.href;
	    var parts = url.split("/");
	    var beforeLast = parts[parts.length - 1];

	    $("ul.right li").removeClass('active');
	    $("ul.right li a[href^='"+beforeLast+"']").addClass('active');

	    return beforeLast;
	}

	window.onload = BeforeLastURL;
	

	/**
	* ----------------------------------------------------------------------------------------
	*    Scroll To About Jean
	* ----------------------------------------------------------------------------------------
	*/

	$('a.scroll[href*=#]').click(function(event){
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top - 120
	    }, 1000);
	    event.preventDefault();
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

	/**
	* ----------------------------------------------------------------------------------------
	*    Scroll Ajax 
	* ----------------------------------------------------------------------------------------
	*/

	if (document.getElementById('chapitres')) {
        var ias = jQuery.ias({
	  		container:  '#chapters-list',
	  		item:       '.single-chapter',
	  		pagination: '#pagination-chapter',
	  		next:       '.suivant'
		});

		ias.extension(new IASSpinnerExtension({
		    src: 'img/loader.gif'
		}));

		ias.extension(new IASTriggerExtension({
		    text: 'Afficher les autres chapitres',
		    offset: 1
		}));
    }

	/**
	* ----------------------------------------------------------------------------------------
	*    Ajax Report Comment
	* ----------------------------------------------------------------------------------------
	*/

	$(".signaled").click(function(){
    	var id = $(this).attr("id");
    	$.post('?p=posts.reported', {id:id});
    	
    	$(this).addClass('comment-report').attr('title', 'Ce Commentaire à été signalé').prop('onclick', null).removeClass('signaled');
    });

	/**
	* ----------------------------------------------------------------------------------------
	*    Error Message
	* ----------------------------------------------------------------------------------------
	*/

    if ($('.error-message').length) {
    	$('html, body').animate({
	        scrollTop: $('.error-message').offset().top
	    }, 1000);
    }

	/**
	* ----------------------------------------------------------------------------------------
	*    Modal Materialize
	* ----------------------------------------------------------------------------------------
	*/

    $('.modal').modal({
		ready: function() {
        	$('.modal-footer a').click(function (e) {
	    		e.preventDefault();
	        });
      	}
    });

    /**
	* ----------------------------------------------------------------------------------------
	*    Dropify + TinyMce
	* ----------------------------------------------------------------------------------------
	*/

	if (document.getElementById('edit-chapter')) {
		$('.dropify').dropify({
			messages: {
				default: 'Glissez-déposez un fichier ici ou cliquez',
				replace: 'Glissez-déposez un fichier ici ou cliquez pour remplacer',
				remove: 'Supprimer',
				error: 'Désolé, le fichier est trop volumineux'
			}
		});

		tinymce.init({
	        selector: "textarea",
	        
	        menubar: false,
	        plugins: [
	            'advlist autolink lists link image charmap print preview anchor textcolor',
	            'searchreplace visualblocks code fullscreen',
	            'insertdatetime media table contextmenu paste code help wordcount'
	       ],
	       height: 400,
	       toolbar: 'formatselect | undo redo | bold italic underline forecolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | link image',
	       language_url: 'js/libs/tinymce/langs/fr_FR.js',
	       language: 'fr_FR',
	    });
	}
});