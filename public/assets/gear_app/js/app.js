/*!
 * Example App
 *
 * @license Copyright (c) 2014. All rights reserved.
 * @author: Emanuele Manco, hello@flashedge.net
 */

(function ($, window, document, undefined) {
  'use strict';

  $(document).ready(function(){ 

        init();

        function init() {
          
          var g = $('.gearWrap').gearPlayer();

              g.ready(function(){
                  
                TweenMax.to('.intro>a', 0.5, {autoAlpha:1});  

                // player is ready and we can apply our events
                $('.intro>a').click(function(e){
                  e.preventDefault(); 
                  g.show(); // this shows the player interface
                });

              });
            
            
             // offcanvas function
             function toggle() {

                if ($('.stage').hasClass('side') || close === true) {

                    TweenMax.to($('.stage>.wrap, .stage>.overlay>span'), 0.5, {x:0, ease:Cubic.easeInOut, clearProps:"transform"});
                    TweenMax.to($('.stage>.overlay'), 0.5, {autoAlpha:0, onComplete: function() { $('body').css({'overflow-y':'inherit'}); $('.offcanvas-menu').css({'display':'none', 'visibility':'hidden'}); } });

                    $('.stage').removeClass('side');

                } else {

                    TweenMax.to($('.stage>.wrap, .stage>.overlay>span'), 0.5, {x:-$('.offcanvas-menu').width(), ease:Cubic.easeInOut});
                    TweenMax.to($('.stage>.overlay'), 0.5, {autoAlpha:1, onComplete: function() { $('body').css({'overflow-y':'hidden'}); } });

                    window.scrollTo(0, 0);

                    $('.stage').addClass('side');
                    $('.offcanvas-menu').css({'display':'block', 'visibility':'visible'});
                  }
            }

            // offcanvas event
            $('.offcanvas-toggle, .stage>.overlay').click(function(){ toggle(); });


      // rollover effects
      $('.over i').each(function() { TweenMax.set($(this), {scaleX:0, scaleY:0}); });

      $('.cover').hover(function(){
          TweenMax.to($(this).children('.over'), 0.5, {alpha:1});
          TweenMax.to($(this).children('.over').children('i'), 0.5, {scaleX:1, scaleY:1});
        }, function(){
          TweenMax.to($(this).children('.over'), 0.5, {alpha:0});
          TweenMax.to($(this).children('.over').children('i'), 0.5, {scaleX:0, scaleY:0});
        });


      // this scrolls each anchor tag to the desired location
        $("a[href*='#']").click(function(e) {
          e.preventDefault();
          var a = $(this).attr('href'),
          offset = $(window).width()>640 ? 100 : 50;  // offset for mobile or desktop

          TweenMax.to(window, 2, {scrollTo:{y:$(a).position().top-offset, autoKill:false}, ease:Cubic.easeInOut});
          if ($(this).parent().parent().parent().hasClass('offcanvas-menu')) { toggle(); } // for offcanvas
      });  

            // put here your custom scripts, if you want to use this file for your stuff

        }

  });


$.noConflict();

}(jQuery, this, this.document));






