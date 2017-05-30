$(document).ready(function() {
 "use strict";
  $("#service-thumbnail").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 3,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
      pagination:false,
      navigation:true,
      navigationText : ["<i class='flaticon-login9'></i>","<i class='flaticon-login12'></i>"],
 
  });
 
});