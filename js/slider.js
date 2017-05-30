
// JavaScript Document
$(document).ready(function() {
 "use strict";
  $("#slider").owlCarousel({
    singleItem: true,
    pagination: true,
    autoPlay: 5000, // rychlost vymeny slidu
    stopOnHover:true,
    navigation: true,
    navigationText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    addClassActive: true,
    afterMove: previousslide,
    beforeMove: nextslide
});

// First Slide
$(".owl-item.active .slider-caption").addClass('animated fadeInLeft');

 
// Other Slides
function previousslide() {
    $(".owl-item.active .slider-caption").addClass('animated fadeInLeft');
}
function nextslide() {
     $(".owl-item .slider-caption").removeClass('animated fadeInLeft');
}
 
});