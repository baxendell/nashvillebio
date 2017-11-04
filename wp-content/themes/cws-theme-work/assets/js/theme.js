// // Custom js for Stern Theme

jQuery(document).ready(function($) {

	//Smooth Scrolling

	$('a[href*="#"]')
	  // Remove links that don't actually link to anything
	  .not('[href="#"]')
	  .not('[href="#0"]')
	  .click(function(event) {
	    // On-page links
	    if (
	      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
	      && 
	      location.hostname == this.hostname
	    ) {
	      // Figure out element to scroll to
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      // Does a scroll target exist?
	      if (target.length) {
	        // Only prevent default if animation is actually gonna happen
	        event.preventDefault();
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000, function() {
	          // Callback after animation
	          // Must change focus!
	          var $target = $(target);
	          $target.focus();
	          if ($target.is(":focus")) { // Checking if the target was focused
	            return false;
	          } else {
	            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
	            $target.focus(); // Set focus again
	          };
	        });
	      }
	    }
	  });
	  
	//Skip Link
	var skipLink = function () {
        $(".skiplink").focusin(function () {
            $(this).css("position","static");
        });

        $(".skiplink").focusout(function () {
            $(this).css("position","absolute");
        });
    }

	//Navigation
	$('.nav-opener').click(function () {
		$('#m-toggle').toggleClass('.nav-active menu');
	});

	//No comments
	$("#commentform").addClass("noauto");

	//Navigation
	$(".nav-opener").on("click",function() {
	    $(".header-top-wrap").toggleClass("nav-active");
	});

	// Play video on play

	 $(".modal").on('shown.bs.modal', function (ev) { 
	 	var $this2 = $(this); 
	 	var $frame2 = $this2.find('.modal-content #video_play iframe'); 
	 	$frame2[0].src += "1"; 
	 });

  	//Stop video on play

	 $(".modal").on('hidden.bs.modal', function (e) { 
	 	var $this = $(this); 
	 	var $frame = $this.find('.modal-content #video_play iframe');
	 	$frame.attr("src", $frame.attr("src").replace("autoplay=1", "autoplay="))
	 	//$frame.attr("src", $frame.attr("src")); 
	 });

	 //Hover for Desktop, click for mobile nav
	 if($(window).width() > 767){
	    $('.dropdown').on('mouseenter mouseleave click tap', function() {
	      $(this).toggleClass("open");
	    });
    } 
});