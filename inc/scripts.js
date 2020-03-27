// Acive Nav Link
$(document).ready(function() {
	// get current URL path and assign 'active' class
	var pathname = window.location.pathname;
	$('ul li a').click(function(){ $('li a').removeClass("navactive"); $(this).addClass("navactive"); });
})

// Animate Menu Toggle Icon
$(document).ready(function(){
  $('.menu-toggle').on('click',function(){
    $('.menu-toggle').toggleClass('active');
  });
});

// Back to Top
$(document).ready(function() {
  // Show or hide the sticky footer button
  $(window).scroll(function() {
     if ($(this).scrollTop() > 300) {
        $('.back-to-top').fadeIn(200);
     } else {
        $('.back-to-top').fadeOut(200);
     }
  });
  
  // Animate the scroll to top
  $('.back-to-top').click(function(event) {
     event.preventDefault();
     
     $('html, body').animate({scrollTop: 0}, 300);
  })
});


// Show and Hide Mobile Menu
$(document).ready(function(){
  $('.menu-toggle').on('click',function(){
    $('.mobile-nav-container').toggleClass('mobile-nav-expanded');
  });
});
