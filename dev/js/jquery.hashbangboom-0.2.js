/*
 * HashBangBoom - Hashbang Loader jQuery plugin
 *        __   __  ___
 * |\/|  |  \|/ _ | |  /\ |
 * |  |  |__/|\__)| | /--\|__
 *
 * copyright Robin Marshall, licensed GPL & MIT
 * http://www.mdigital.co.nz
 *
 *
 * usage:
 *
 * 	minimal:
 * 		$('div#content a').hashBangBoom({selector:'div#content'});
 *
 *	By default the plugin contains a sliding animation between the content panels.
 *  The plugin will include a post parameter of ajax=1 to the clicked links, this
 *  can be used to tell the CMS to serve up an ajax template which contains only
 *  the necessary content. If you don't have access to the CMS, then you can use
 *  the
 *
 *
 *	full:
 *		$('div#content a').hashBangBoom(
 *				{
 *					selector:    	'div#content' 	// content to replace
 *					filter:		 	'#content' 		// filter for content returned
 *					ignore:      	'contact' 		// link patter to ignore
 *					urlPattern:  	/buzz\// 		// link pattern to trigger on
 *					loaded:			afterLoad		// callback after content loads but before animation is complete
 *					complete:		finished		// callback after load and animation is complete
 *					click:			clicked			// callback when the link is clicked
 *					afterAnimation:	fadeIn			// callback after the animation is complete - deprecated
 *					transitionIn:	transition1		// callback to transition the content in
 *					transitionOut:  transition2		// callback to transition the content out
 *				}
 *		);
 *
 */

var isIE=navigator.userAgent.match(/MSIE/i)
if (!Array.prototype.indexOf) {
      Array.prototype.indexOf = function(elt /*, from*/) {
           var len = this.length;
           var from = Number(arguments[1]) || 0;
           from = (from < 0) ? Math.ceil(from) : Math.floor(from);
           if (from < 0) from += len;
           for (; from < len; from++) {
              if (from in this && this[from] === elt) return from;
           }
      return -1;
     };
}

window.hbbSel=[];
var xhr;
if (jQuery) (function($) {

		var haveContent=false;
        var haveMoved=false;
        var content='';
        var loading=false;

        $.extend($.fn, {
    		hashBangBoom: function(options) {

        		var o=options;
	            o.linkSelector=this;

	            $(window).hashchange( function(){
	            	// check to see if it's a hashbang URL
	            	if (location.hash.match(/#\!/)) {
	            		// check to see if we should ignore it
						if ( !o.ignore || !location.hash.match(o.ignore)) {
							// check to see if it matches the URL pattern if there is one

							if (!o.urlPattern || location.hash.match(o.urlPattern)) {
								click( location.hash.replace('#!/',''),o );
							}

		                }
		            }
	            });

	            // trigger a hashchange event for loading first time
	            $(window).hashchange();

	            // collect up the selectors so we can hashify across instances
	            hbbSel.push(o.linkSelector.selector);
	            hashify();
        	}
        });

        var hashify = function() {
        	// hashify links
        	$(hbbSel.join(', ')).each(function() {

        		var newhref=this.href.replace('http://'+window.location.hostname+'/','');
        		if (!this.href.match('/#!/')) {
        			this.href='/#!/'+newhref;
        		}
        	});
        };

        var getDirection = function(a,b) {

          if (a==b) return;
          if (a==0 && b==$('#primary-nav li a').length-1) return 'left';
          if (a==$('#primary-nav li a').length-1 && b==0) return 'right';
          if (a<b) return 'right';

          return 'left';

        }

        var click = function(url,o) {
        	loading=true;
        	resetContent(o);
          var currPos=$('#primary-nav li a').toArray().indexOf($('#primary-nav li.selected a')[0]);
          var targetPos=$('#primary-nav li a').toArray().indexOf($('#primary-nav li a[href="/#!/'+url+'"]')[0]);
          o.direction=getDirection(currPos,targetPos);

          if (url=="") url="/"; //hack for IE9
        	// run the click handler
        	o.click&&o.click(url);
        	//get the content
        	xhr=$.post(url,{ajax:1},function(resp) {
        		// filter the response if there is a filter defined
        		content=o.filter?$(resp).find(o.filter):resp;
				haveContent=true;
				// run the loaded handler
				o.loaded&&o.loaded();
				// check if the content is ready
				checkStatus(o);
				});
        	// run the out transition, either user defined or default
        	if(o.transitionOut) {
        		o.transitionOut(o);
        		//haveMoved=true;
        	} else {
        		transitionOut(o);
        	}

        };

        var resetContent = function(o) {
        	if (xhr) xhr.abort();
        	$(o.selector).css('left','0px');

        }

        var transitionOut = function(o) {
        	// default slide out transition
        	var marginWidth=$(o.selector).offset().left;
        	$(o.selector).css('position','relative');
        	if (isIE) {
            $(o.selector).animate({left:(o.direction=="right"?'-':'')+($(o.selector).width()+marginWidth+50)+'px'},{ queue:false, duration:1000, easing: 'easeOutExpo', complete: function(o) {haveMoved=true; checkStatus(o);}(o)});
          } else {
          	$(o.selector).animate({left:(o.direction=="right"?'-':'')+($(o.selector).width()+marginWidth+50)+'px', opacity:'0'},{ queue:false, duration:1000, easing: 'easeOutExpo', complete: function(o) {haveMoved=true; checkStatus(o);}(o)});
          }

        };

        var transitionIn = function(o) {
        	// default slide in transition
        	$(o.selector).attr('style','position:relative; left:'+(o.direction=="left"?'-':'')+$(o.selector).width()+'px');
          if (isIE) {
            $(o.selector).animate({left:'0px'},{ queue:false, duration:1500, easing: 'easeOutExpo', complete: function(o) {o.afterAnimation&&o.afterAnimation();}(o)});
          } else {
            $(o.selector).animate({left:'0px', opacity:'1'},{ queue:false, duration:1500, easing: 'easeOutExpo', complete: function(o) {o.afterAnimation&&o.afterAnimation();}(o)});
          }
          

        };

        var checkStatus = function(o) {
        	// check to see if the content has successfully loaded
        	if (haveMoved&&haveContent) {
        		haveMoved = false;
        		haveContent = false;
        		// update the content in the container
        		$(o.selector).replaceWith(content);
        		// run the user defined transition or the default one
        		o.transitionIn?o.transitionIn(o):transitionIn(o);
        		// run the complete handler
        		o.complete && o.complete();
        		// hashify all the links ready for the next click
        		hashify();
        		loading=false;
            }
        };


})(jQuery);
