$(function () {
	$(".scrollBottom").click(function () {
		var st = $("#footer").offset().top;
		$("html,body").animate({ scrollTop: st }, "slow", function () {
			//$("#footer img").effect("bounce",{times:2},300);
		});
	});

	$('#primary-nav a').hashBangBoom({
		selector: '#main .content:first',
		loaded: afterLoad,
		ignore: '/contact',
		complete: afterSlide,
		click: selectTab
	});

	//Assign handlers to the simple direction handlers.
	// var swipeOptions= {
	// 	swipeLeft:getNextURL,
	// 	swipeRight:getPrevURL,
	// 	threshold:150
	// }

	//Enable swiping
	//$("#main").swipe( swipeOptions );

	// Hamburger button
	$('#hamburger-button').on('click', function () {
		$('body').toggleClass('hamburger-open');
	});
	$('#primary-nav li a').on('click', function () {
		$('body').removeClass('hamburger-open');
	});
});

function afterLoad() {
	$('html.js #content .wrap').css('visibility', 'visible');
}

function afterSlide() {
	var url = document.location.hash.replace('#!/', '');
	$('a[href="/#!/' + url + '"]').parent().addClass('selected');
	$(".accordionHeader").toggle(
		function () {
			$(".accordionContent").slideDown();
		},
		function () {
			$(".accordionContent").slideUp();
		}
	);

	$("html,body").delay(600).animate({ scrollTop: 0 }, "slow");
}

function getNextURL() {
	var curr = currNavPos();
	var target;
	if (curr == $('#primary-nav li').length - 1) {
		target = 0;
	} else {
		target = curr + 1;
	}
	window.location.href = $('#primary-nav li a')[target].href;
}

function getPrevURL() {
	var curr = currNavPos();
	var target;
	if (curr == 0) {
		target = $('#primary-nav li').length - 1;
	} else {
		target = curr - 1;
	}
	window.location.href = $('#primary-nav li a')[target].href;
}

function currNavPos() {
	return $('#primary-nav li').toArray().indexOf($('#primary-nav li.active').first()[0]);
}

function selectTab(url) {
	$('#primary-nav li').removeClass('active');
	url = url.split('/')[0];
	$('a[href="/#!/' + url + '"]').parent().addClass('active');
}
