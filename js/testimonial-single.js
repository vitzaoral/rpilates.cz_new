// JavaScript Document
$(document).ready(function() {
 "use strict";
  $("#testimonial-single").owlCarousel({
 
      autoPlay: 5000, //Set AutoPlay to 3 seconds
 
      stopOnHover:true,
      items : 1,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
      pagination:false,
      navigation:true,
      navigationText : ["<i class='flaticon-login9'></i>","<i class='flaticon-login12'></i>"]
 
  });
 
});