/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
} )( jQuery );

// // Scripts for Audio button

// var audio = document.getElementById('background_audio');    

// document.getElementById('mute').addEventListener('click', function (e)
// {
//     if ( audio.paused == true) {
//         audio.play();
//     } else {
//         if (audio.muted == false) {
//             audio.muted = true;
//         } else {
//             audio.muted = false;
//         }
//     }
// }, false);

// (function($) {
//     var $audio = $('#audio-icon');
//     $audio.on('click', function ()
//     {
//         if ($audio.hasClass('mute-on') == true) {
//             $audio.removeClass('mute-on');
//             $audio.addClass('mute-off');
//         } else if ($audio.hasClass('mute-off') == true){
//             $audio.removeClass('mute-off');
//             $audio.addClass('mute-on');
//         }
//     });
	
// })( jQuery );


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
  // jQuery(window).mouseleave( function(){
  //     if (event.toElement == null) {
  //         if(sessionStorage["PopupShown"] != 'yes'){ 
  //              showPopup();
  //          };
  //      };
  // });
  jQuery("#about-button").click( function(){
    event.preventDefault();
      jQuery(".typeform-share").trigger("click");
  });
});

// function showPopup() {
//   jQuery(".typeform-share").trigger("click");
//   sessionStorage["PopupShown"] = 'yes';
// };
// Script for main-intro
//(function($) {
//    if (sessionStorage["IntroShown"] != 'yes') {
//        $('.main-intro').removeClass('hide'); 
//    }; 
//    
//    $('.enter').on('click', function() {
//        $('.main-intro').addClass('hide');
//        sessionStorage["IntroShown"] = 'yes';
//    });
//  
//})( jQuery );

// Script for Footer 

(function($) {
    var $footerHeight = $('.site-footer').css("height");
    var $siteFooter = $('.site-footer');
    var $openFooter = $('.open-footer');
    var $footerOverlay = $('.footer-overlay');
    
    $openFooter.on('click', function() {
       $siteFooter.removeClass('invisible');
       $siteFooter.addClass('slide-up');
       $openFooter.addClass('hide');
       $footerOverlay.removeClass('zero-width');
    });
    
    $('.close-footer').on('click', function() {
        $siteFooter.removeClass('slide-up');
        $footerOverlay.addClass('zero-width');
       $openFooter.removeClass('hide');
       $siteFooter.addClass('invisible');
    });
    
    $footerOverlay.on('click', function() {
        $siteFooter.removeClass('slide-up');
        $footerOverlay.addClass('zero-width');
       $openFooter.removeClass('hide');
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
      var aboutWaypoint = jQuery('#about-video').waypoint({
        handler: function(direction) {
          if (direction === "down" ) {
              jQuery('#back-to-top').removeClass('opacity-zero');  
          } else {
              jQuery('#back-to-top').addClass('opacity-zero'); 
          }
        },
              offset: '50%'
      });
      var aboutWaypointTwo = jQuery('#about-section-3').waypoint({
        handler: function(direction) {
              jQuery('#about-section-3 > .inner-content ').removeClass('opacity-zero');  
        },
            offset: '50%'
      });
      var aboutWaypointThree = jQuery('#about-section-5').waypoint({
        handler: function(direction) {
              jQuery('#about-section-5 > .inner-content ').removeClass('opacity-zero');  
        },
            offset: '50%'
      }); 
});

// Script for typeform popup

jQuery(document).ready(function(){
  
    jQuery(document).on('pageleave', function() {
        if(sessionStorage["PopupShown"] != 'yes'){ 
                showPopup();
        }
    });
        
//        jQuery.fn.pageleave();
    
  jQuery("#about-button").click( function(){
    event.preventDefault();
      jQuery(".typeform-share").trigger("click");
  });
});

function showPopup() {
  jQuery(".typeform-share").trigger("click");
  sessionStorage["PopupShown"] = 'yes';
}

//
//  Mobile Navigation Scripts
//

(function($) {
    
    var $menuButton = $("#menu-button");
    var $overlay = $("#masthead .dark-overlay");
    var $masthead = $("#masthead");
    
        $menuButton.click( function() {
        if ( $menuButton.attr('aria-expanded') === "false" ) {
            $menuButton.attr('aria-expanded', true);
            $masthead.toggleClass('menu-open');
            $overlay.removeClass('hide'); 
            $overlay.toggleClass('opacity-four');
        } else {
            $menuButton.attr('aria-expanded', false);
            $masthead.toggleClass('menu-open');
            $overlay.toggleClass('opacity-four');
            $overlay.addClass('hide'); 
        }
    });

})( jQuery );

// Services Slider Script

(function($) {
    
    $(document).ready(function(){
      $('.slider').slick({
        autoplay: true,
        fade: true
      });
    });

})( jQuery );

/*!
Waypoints - 4.0.1
Copyright © 2011-2016 Caleb Troughton
Licensed under the MIT license.
https://github.com/imakewebthings/waypoints/blob/master/licenses.txt
*/
!function(){"use strict";function t(o){if(!o)throw new Error("No options passed to Waypoint constructor");if(!o.element)throw new Error("No element option passed to Waypoint constructor");if(!o.handler)throw new Error("No handler option passed to Waypoint constructor");this.key="waypoint-"+e,this.options=t.Adapter.extend({},t.defaults,o),this.element=this.options.element,this.adapter=new t.Adapter(this.element),this.callback=o.handler,this.axis=this.options.horizontal?"horizontal":"vertical",this.enabled=this.options.enabled,this.triggerPoint=null,this.group=t.Group.findOrCreate({name:this.options.group,axis:this.axis}),this.context=t.Context.findOrCreateByElement(this.options.context),t.offsetAliases[this.options.offset]&&(this.options.offset=t.offsetAliases[this.options.offset]),this.group.add(this),this.context.add(this),i[this.key]=this,e+=1}var e=0,i={};t.prototype.queueTrigger=function(t){this.group.queueTrigger(this,t)},t.prototype.trigger=function(t){this.enabled&&this.callback&&this.callback.apply(this,t)},t.prototype.destroy=function(){this.context.remove(this),this.group.remove(this),delete i[this.key]},t.prototype.disable=function(){return this.enabled=!1,this},t.prototype.enable=function(){return this.context.refresh(),this.enabled=!0,this},t.prototype.next=function(){return this.group.next(this)},t.prototype.previous=function(){return this.group.previous(this)},t.invokeAll=function(t){var e=[];for(var o in i)e.push(i[o]);for(var n=0,r=e.length;r>n;n++)e[n][t]()},t.destroyAll=function(){t.invokeAll("destroy")},t.disableAll=function(){t.invokeAll("disable")},t.enableAll=function(){t.Context.refreshAll();for(var e in i)i[e].enabled=!0;return this},t.refreshAll=function(){t.Context.refreshAll()},t.viewportHeight=function(){return window.innerHeight||document.documentElement.clientHeight},t.viewportWidth=function(){return document.documentElement.clientWidth},t.adapters=[],t.defaults={context:window,continuous:!0,enabled:!0,group:"default",horizontal:!1,offset:0},t.offsetAliases={"bottom-in-view":function(){return this.context.innerHeight()-this.adapter.outerHeight()},"right-in-view":function(){return this.context.innerWidth()-this.adapter.outerWidth()}},window.Waypoint=t}(),function(){"use strict";function t(t){window.setTimeout(t,1e3/60)}function e(t){this.element=t,this.Adapter=n.Adapter,this.adapter=new this.Adapter(t),this.key="waypoint-context-"+i,this.didScroll=!1,this.didResize=!1,this.oldScroll={x:this.adapter.scrollLeft(),y:this.adapter.scrollTop()},this.waypoints={vertical:{},horizontal:{}},t.waypointContextKey=this.key,o[t.waypointContextKey]=this,i+=1,n.windowContext||(n.windowContext=!0,n.windowContext=new e(window)),this.createThrottledScrollHandler(),this.createThrottledResizeHandler()}var i=0,o={},n=window.Waypoint,r=window.onload;e.prototype.add=function(t){var e=t.options.horizontal?"horizontal":"vertical";this.waypoints[e][t.key]=t,this.refresh()},e.prototype.checkEmpty=function(){var t=this.Adapter.isEmptyObject(this.waypoints.horizontal),e=this.Adapter.isEmptyObject(this.waypoints.vertical),i=this.element==this.element.window;t&&e&&!i&&(this.adapter.off(".waypoints"),delete o[this.key])},e.prototype.createThrottledResizeHandler=function(){function t(){e.handleResize(),e.didResize=!1}var e=this;this.adapter.on("resize.waypoints",function(){e.didResize||(e.didResize=!0,n.requestAnimationFrame(t))})},e.prototype.createThrottledScrollHandler=function(){function t(){e.handleScroll(),e.didScroll=!1}var e=this;this.adapter.on("scroll.waypoints",function(){(!e.didScroll||n.isTouch)&&(e.didScroll=!0,n.requestAnimationFrame(t))})},e.prototype.handleResize=function(){n.Context.refreshAll()},e.prototype.handleScroll=function(){var t={},e={horizontal:{newScroll:this.adapter.scrollLeft(),oldScroll:this.oldScroll.x,forward:"right",backward:"left"},vertical:{newScroll:this.adapter.scrollTop(),oldScroll:this.oldScroll.y,forward:"down",backward:"up"}};for(var i in e){var o=e[i],n=o.newScroll>o.oldScroll,r=n?o.forward:o.backward;for(var s in this.waypoints[i]){var a=this.waypoints[i][s];if(null!==a.triggerPoint){var l=o.oldScroll<a.triggerPoint,h=o.newScroll>=a.triggerPoint,p=l&&h,u=!l&&!h;(p||u)&&(a.queueTrigger(r),t[a.group.id]=a.group)}}}for(var c in t)t[c].flushTriggers();this.oldScroll={x:e.horizontal.newScroll,y:e.vertical.newScroll}},e.prototype.innerHeight=function(){return this.element==this.element.window?n.viewportHeight():this.adapter.innerHeight()},e.prototype.remove=function(t){delete this.waypoints[t.axis][t.key],this.checkEmpty()},e.prototype.innerWidth=function(){return this.element==this.element.window?n.viewportWidth():this.adapter.innerWidth()},e.prototype.destroy=function(){var t=[];for(var e in this.waypoints)for(var i in this.waypoints[e])t.push(this.waypoints[e][i]);for(var o=0,n=t.length;n>o;o++)t[o].destroy()},e.prototype.refresh=function(){var t,e=this.element==this.element.window,i=e?void 0:this.adapter.offset(),o={};this.handleScroll(),t={horizontal:{contextOffset:e?0:i.left,contextScroll:e?0:this.oldScroll.x,contextDimension:this.innerWidth(),oldScroll:this.oldScroll.x,forward:"right",backward:"left",offsetProp:"left"},vertical:{contextOffset:e?0:i.top,contextScroll:e?0:this.oldScroll.y,contextDimension:this.innerHeight(),oldScroll:this.oldScroll.y,forward:"down",backward:"up",offsetProp:"top"}};for(var r in t){var s=t[r];for(var a in this.waypoints[r]){var l,h,p,u,c,d=this.waypoints[r][a],f=d.options.offset,w=d.triggerPoint,y=0,g=null==w;d.element!==d.element.window&&(y=d.adapter.offset()[s.offsetProp]),"function"==typeof f?f=f.apply(d):"string"==typeof f&&(f=parseFloat(f),d.options.offset.indexOf("%")>-1&&(f=Math.ceil(s.contextDimension*f/100))),l=s.contextScroll-s.contextOffset,d.triggerPoint=Math.floor(y+l-f),h=w<s.oldScroll,p=d.triggerPoint>=s.oldScroll,u=h&&p,c=!h&&!p,!g&&u?(d.queueTrigger(s.backward),o[d.group.id]=d.group):!g&&c?(d.queueTrigger(s.forward),o[d.group.id]=d.group):g&&s.oldScroll>=d.triggerPoint&&(d.queueTrigger(s.forward),o[d.group.id]=d.group)}}return n.requestAnimationFrame(function(){for(var t in o)o[t].flushTriggers()}),this},e.findOrCreateByElement=function(t){return e.findByElement(t)||new e(t)},e.refreshAll=function(){for(var t in o)o[t].refresh()},e.findByElement=function(t){return o[t.waypointContextKey]},window.onload=function(){r&&r(),e.refreshAll()},n.requestAnimationFrame=function(e){var i=window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||t;i.call(window,e)},n.Context=e}(),function(){"use strict";function t(t,e){return t.triggerPoint-e.triggerPoint}function e(t,e){return e.triggerPoint-t.triggerPoint}function i(t){this.name=t.name,this.axis=t.axis,this.id=this.name+"-"+this.axis,this.waypoints=[],this.clearTriggerQueues(),o[this.axis][this.name]=this}var o={vertical:{},horizontal:{}},n=window.Waypoint;i.prototype.add=function(t){this.waypoints.push(t)},i.prototype.clearTriggerQueues=function(){this.triggerQueues={up:[],down:[],left:[],right:[]}},i.prototype.flushTriggers=function(){for(var i in this.triggerQueues){var o=this.triggerQueues[i],n="up"===i||"left"===i;o.sort(n?e:t);for(var r=0,s=o.length;s>r;r+=1){var a=o[r];(a.options.continuous||r===o.length-1)&&a.trigger([i])}}this.clearTriggerQueues()},i.prototype.next=function(e){this.waypoints.sort(t);var i=n.Adapter.inArray(e,this.waypoints),o=i===this.waypoints.length-1;return o?null:this.waypoints[i+1]},i.prototype.previous=function(e){this.waypoints.sort(t);var i=n.Adapter.inArray(e,this.waypoints);return i?this.waypoints[i-1]:null},i.prototype.queueTrigger=function(t,e){this.triggerQueues[e].push(t)},i.prototype.remove=function(t){var e=n.Adapter.inArray(t,this.waypoints);e>-1&&this.waypoints.splice(e,1)},i.prototype.first=function(){return this.waypoints[0]},i.prototype.last=function(){return this.waypoints[this.waypoints.length-1]},i.findOrCreate=function(t){return o[t.axis][t.name]||new i(t)},n.Group=i}(),function(){"use strict";function t(t){this.$element=e(t)}var e=window.jQuery,i=window.Waypoint;e.each(["innerHeight","innerWidth","off","offset","on","outerHeight","outerWidth","scrollLeft","scrollTop"],function(e,i){t.prototype[i]=function(){var t=Array.prototype.slice.call(arguments);return this.$element[i].apply(this.$element,t)}}),e.each(["extend","inArray","isEmptyObject"],function(i,o){t[o]=e[o]}),i.adapters.push({name:"jquery",Adapter:t}),i.Adapter=t}(),function(){"use strict";function t(t){return function(){var i=[],o=arguments[0];return t.isFunction(arguments[0])&&(o=t.extend({},arguments[1]),o.handler=arguments[0]),this.each(function(){var n=t.extend({},o,{element:this});"string"==typeof n.context&&(n.context=t(this).closest(n.context)[0]),i.push(new e(n))}),i}}var e=window.Waypoint;window.jQuery&&(window.jQuery.fn.waypoint=t(window.jQuery)),window.Zepto&&(window.Zepto.fn.waypoint=t(window.Zepto))}();
///**
// * File navigation.js.
// *
// * Handles toggling the navigation menu for small screens and enables TAB key
// * navigation support for dropdown menus.
// */
//( function() {
//	var container, button, menu, links, subMenus, i, len;
//
//	container = document.getElementById( 'site-navigation' );
//	if ( ! container ) {
//		return;
//	}
//
////	button = container.getElementById( '' );
//
//	menu = container.getElementsByTagName( 'ul' )[0];
//
//	// Hide menu toggle button if menu is empty and return early.
//	if ( 'undefined' === typeof menu ) {
//		button.style.display = 'none';
//		return;
//	}
//
//	menu.setAttribute( 'aria-expanded', 'false' );
//	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
//		menu.className += ' nav-menu';
//	}
//
//	button.onclick = function() {
//		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
//			container.className = container.className.replace( ' toggled', '' );
//			button.setAttribute( 'aria-expanded', 'false' );
//			menu.setAttribute( 'aria-expanded', 'false' );
//		} else {
//			container.className += ' toggled';
//			button.setAttribute( 'aria-expanded', 'true' );
//			menu.setAttribute( 'aria-expanded', 'true' );
//		}
//	};
//
//	// Get all the link elements within the menu.
//	links    = menu.getElementsByTagName( 'a' );
//	subMenus = menu.getElementsByTagName( 'ul' );
//
//	// Set menu items with submenus to aria-haspopup="true".
//	for ( i = 0, len = subMenus.length; i < len; i++ ) {
//		subMenus[i].parentNode.setAttribute( 'aria-haspopup', 'true' );
//	}
//
//	// Each time a menu link is focused or blurred, toggle focus.
//	for ( i = 0, len = links.length; i < len; i++ ) {
//		links[i].addEventListener( 'focus', toggleFocus, true );
//		links[i].addEventListener( 'blur', toggleFocus, true );
//	}
//
//	/**
//	 * Sets or removes .focus class on an element.
//	 */
//	function toggleFocus() {
//		var self = this;
//
//		// Move up through the ancestors of the current link until we hit .nav-menu.
//		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {
//
//			// On li elements toggle the class .focus.
//			if ( 'li' === self.tagName.toLowerCase() ) {
//				if ( -1 !== self.className.indexOf( 'focus' ) ) {
//					self.className = self.className.replace( ' focus', '' );
//				} else {
//					self.className += ' focus';
//				}
//			}
//
//			self = self.parentElement;
//		}
//	}
//
//	/**
//	 * Toggles `focus` class to allow submenu access on tablets.
//	 */
//	( function( container ) {
//		var touchStartFn, i,
//			parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );
//
//		if ( 'ontouchstart' in window ) {
//			touchStartFn = function( e ) {
//				var menuItem = this.parentNode, i;
//
//				if ( ! menuItem.classList.contains( 'focus' ) ) {
//					e.preventDefault();
//					for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
//						if ( menuItem === menuItem.parentNode.children[i] ) {
//							continue;
//						}
//						menuItem.parentNode.children[i].classList.remove( 'focus' );
//					}
//					menuItem.classList.add( 'focus' );
//				} else {
//					menuItem.classList.remove( 'focus' );
//				}
//			};
//
//			for ( i = 0; i < parentLink.length; ++i ) {
//				parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
//			}
//		}
//	}( container ) );
//} )();

/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
( function() {
	var isWebkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
	    isOpera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
	    isIe     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

	if ( ( isWebkit || isOpera || isIe ) && document.getElementById && window.addEventListener ) {
		window.addEventListener( 'hashchange', function() {
			var id = location.hash.substring( 1 ),
				element;

			if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
				return;
			}

			element = document.getElementById( id );

			if ( element ) {
				if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
					element.tabIndex = -1;
				}

				element.focus();
			}
		}, false );
	}
})();
