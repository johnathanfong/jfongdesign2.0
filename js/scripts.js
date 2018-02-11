/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu
 *
 */

let $j = jQuery.noConflict();

$j(function(){
  console.log("It's working");

  $j('.menu-toggle').on('click', function(e) {
    $j('nav#site-navigation').toggleClass("show");    
    $j('button#toggle').toggleClass("close");
    e.preventDefault();
  });
});


$j(window).scroll(function() {
  let bannerHeight = $j('header.main-banner').height();

    if ( $j(window).scrollTop() >= bannerHeight ) {
        console.log('past the banner');
        $j('#toggle').addClass('past-banner');

    } else {
        $j('#toggle').removeClass('past-banner');

    }
});