// Scripts for Audio button

var audio = document.getElementById('background_audio');    

document.getElementById('mute').addEventListener('click', function (e)
{
    if ( audio.paused == true) {
        audio.play();
    } else {
        if (audio.muted == false) {
            audio.muted = true;
        } else {
            audio.muted = false;
        }
    }
}, false);

(function($) {
    var $audio = $('#audio-icon');
    $audio.on('click', function ()
    {
        if ($audio.hasClass('mute-on') == true) {
            $audio.removeClass('mute-on');
            $audio.addClass('mute-off');
        } else if ($audio.hasClass('mute-off') == true){
            $audio.removeClass('mute-off');
            $audio.addClass('mute-on');
        }
    });
	
})( jQuery );

// Script for Next and Prev Arrows
//
//(function($) {
//    $('.next-triangle').on('click', function() {
//        history.pushState(null, null, '/briantohana/next-one-jimmy/');
//    });
//    
//    $('.prev-triangle').on('click', function() {
//        history.pushState(null, null, '/briantohana/prev-one-jimmy/');
//    });
//	
//})( jQuery );

// Script for main-intro
(function($) {
    if (sessionStorage["IntroShown"] != 'yes') {
        $('.main-intro').removeClass('hide'); 
    }; 
    
    $('.enter').on('click', function() {
        $('.main-intro').addClass('hide');
        sessionStorage["IntroShown"] = 'yes';
    });
	
})( jQuery );

// Script for Footer 

(function($) {
    var $footerHeight = $('.site-footer').css("height");
    var $siteFooter = $('.site-footer');
    $('.open-footer').on('click', function() {
       $siteFooter.removeClass('invisible');
       $siteFooter.addClass('slide-up');
       $('.open-footer').addClass('hide');
       $('.footer-overlay').removeClass('zero-width');
//       $('.close-footer').removeClass('hide');
    });
    
    $('.close-footer').on('click', function() {
        $siteFooter.removeClass('slide-up');
        $('.footer-overlay').addClass('zero-width');
       $('.open-footer').removeClass('hide');
       $siteFooter.addClass('invisible');
    });
    
    $('.footer-overlay').on('click', function() {
        $siteFooter.removeClass('slide-up');
//        $('.close-footer').addClass('hide');
        $('.footer-overlay').addClass('zero-width');
       $('.open-footer').removeClass('hide');
       $siteFooter.addClass('invisible');
    });
	
})( jQuery );

/// Landscape only message

(function($) {
    
    var showAlert = function () {
        $('#alert-to-landscape').removeClass('hide');
    };
    var removeAlert = function () {
        $('#alert-to-landscape').addClass('hide');
    };
    if(window.innerHeight > window.innerWidth){
            showAlert(); 
    };
    $(window).on("orientationchange",function(){
        if(window.innerHeight > window.innerWidth){
            showAlert();
        } else {
            removeAlert();
        }
    });
    $(window).resize( function(){
        if(window.innerHeight > window.innerWidth){
            showAlert();
        } else {
            removeAlert();
        }
    });

})( jQuery );


// Scroll arrow and Back to Top script

jQuery(document).ready(function() {
    
    jQuery (".scroll-arrow").click( function() {
        event.preventDefault();
        jQuery('html, body').animate({
            scrollTop: jQuery( jQuery.attr(this, 'href') ).offset().top
        }, 1300);
    });
    jQuery ("#back-to-top a").click( function() {
        event.preventDefault();
        jQuery('html, body').animate({
            scrollTop: jQuery( jQuery.attr(this, 'href') ).offset().top
        }, 1200);
    });
});

// Back to Top Element

jQuery(document).ready(function() { 
    var servicesWaypoint = jQuery('#philosophy').waypoint({
        handler: function(direction) {
          if (direction === "down" ) {
              jQuery('#back-to-top').removeClass('opacity-zero');  
          } else {
              jQuery('#back-to-top').addClass('opacity-zero'); 
          }
        }
      });
      var servicesWaypointTwo = jQuery('#coaching').waypoint({
        handler: function(direction) {
              jQuery('#philosophy').removeClass('opacity-zero');  
        },
            offset: '50%'
      });
      var servicesWaypointThree = jQuery('#what-taught').waypoint({
        handler: function(direction) {
              jQuery('#what-taught-inner').removeClass('opacity-zero');  
        },
            offset: '50%'
      });
      var servicesWaypointFour = jQuery('#four-pillars').waypoint({
        handler: function(direction) {
              jQuery('#four-pillars-content').removeClass('opacity-zero');  
        },
            offset: '50%'
      });
      var servicesWaypointFive = jQuery('#typical-session').waypoint({
        handler: function(direction) {
              jQuery('#typical-session > .content-wrap').removeClass('opacity-zero');  
        },
            offset: '50%'
      });
      var servicesWaypointSix = jQuery('#facilitation').waypoint({
        handler: function(direction) {
              jQuery('#facilitation > .content-wrap ').removeClass('opacity-zero');  
        },
            offset: '50%'
      });
      var aboutWaypoint = jQuery('#about-section-2').waypoint({
        handler: function(direction) {
          if (direction === "down" ) {
              jQuery('#back-to-top').removeClass('opacity-zero');  
          } else {
              jQuery('#back-to-top').addClass('opacity-zero'); 
          }
        }
      });
      var aboutWaypointTwo = jQuery('#about-section-3').waypoint({
        handler: function(direction) {
              jQuery('#about-section-3 > .inner-content ').removeClass('opacity-zero');  
        },
            offset: '50%'
      });
      var aboutWaypointTwo = jQuery('#about-section-5').waypoint({
        handler: function(direction) {
              jQuery('#about-section-5 > .inner-content ').removeClass('opacity-zero');  
        },
            offset: '50%'
      });
});

// Script for typeform popup

jQuery(document).ready(function(){
  jQuery(window).mouseleave( function(){
      if (event.toElement == null) {
          if(sessionStorage["PopupShown"] != 'yes'){ 
               showPopup();
           };
       };
  });
});

function showPopup() {
  jQuery(".typeform-share").trigger("click");
  sessionStorage["PopupShown"] = 'yes';
};
