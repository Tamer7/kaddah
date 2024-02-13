"use strict";
var $ = jQuery.noConflict();

// Select the button element
var button = document.getElementById("mobile-top");

// Set a click event listener on the button
button.addEventListener("click", function() {
  // Smoothly scroll the page to the top
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});