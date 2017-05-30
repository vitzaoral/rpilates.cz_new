// JavaScript Document
$(document).ready(function() {
 "use strict";
  $("#service").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      navigationText : ["<i class='flaticon-login12'></i>","<i class='flaticon-login9'></i>"],
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      //Pagination
      pagination : false,
      autoPlay: true
   
      
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 
});