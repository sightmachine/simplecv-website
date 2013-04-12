jQuery(document).ready(function ($) {
  $('.post_image img').each(function() {
    $(this).hover(
      function() {
        $(this).stop().animate({ opacity: 0.7 }, 200);
      },
      function() {
        $(this).stop().animate({ opacity: 1.0 }, 200);
      }
    )
  });
  
    
});