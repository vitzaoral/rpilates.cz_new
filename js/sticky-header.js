// JavaScript Document
 
  $(document).ready(function(){
  	"use strict";
    $(".navigation, .header").sticky({topSpacing:0});
  });
 $(document).ready(function(){
    $("body").scrollspy({
        target: ".navigation",
        offset: 70
    }) 
});