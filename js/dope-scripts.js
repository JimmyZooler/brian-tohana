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
    $('.enter').on('click', function() {
       $('.main-intro').addClass('hide');
    });
    
    $('.prev-triangle').on('click', function() {
        $('.main-intro').removeClass('hide');
    });
	
})( jQuery );