$(document).ready(function() {
 "use strict";
  $("#service-thumbnail").owlCarousel({
 
      autoPlay: 5000, // posun po 5 sekundach
 
      items : 3,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
      stopOnHover:true,
      pagination:false,
      navigation:true,
      navigationText : ["<i class='flaticon-login9'></i>","<i class='flaticon-login12'></i>"],
 
  });
 
});