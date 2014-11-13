$(document).ready(function() {

	$('.hidden').hide();

	$('.hdash:empty').css({'height':'1px'});

	// $("#sb a, h2, h3, h4, .nav li").ieffembedfix();
	// $('h2, #sb a, h4').css({
	// 	filter: 'progid:DXImageTransform.Microsoft.AlphaImageLoader(src=/scripts/hIEfix.png,sizingMethod=crop',
	// 	zoom: '1'
	// });

	// $('h2, #sb a, h4').css({
	// 	filter: 'progid:DXImageTransform.Microsoft.Alpha(Opacity=100)',
	// 	zoom: '1'
	// });

	$('.drop').toggle(
		function() {
			$(this).siblings('.hidden').slideDown();
			$(this).children('.hidden').fadeIn();
			if ($(this).hasClass('links') == true){
				$(this).children('a').html('Short List<span class="contract"></span>');
			}
		},
		function() {
			$(this).siblings('.hidden').slideUp();
			$(this).children('.hidden').fadeOut();
			if ($(this).hasClass('links') == true){
				$(this).children('a').html('Full List<span></span>');
			}
		});

	$('.drop2').toggle(
		function() {
			var link = $(this);
			$(this).siblings('.hidden').slideDown(function(){
				$(this).children('div').animate({opacity: 1.0});
				link.html('Hide <span>additional information <span class="arr contract"></span></span>');
			});

		},
		function() {
			var link = $(this);
			$(this).siblings('.hidden').children('div').animate({opacity: 0},function(){
				$(this).parent('.hidden').slideUp();
				link.html('Learn more <span>about this guide <span class="arr"></span></span>');
			});
		});

	$('#upload-resume').uploadify({
		'uploader': '/scripts/uploadify.swf',
		'script': '/scripts/uploadify.php',
		'folder': '/uploads',
		'cancelImg': '/img/cancel.png',
		'wmode': 'transparent',
		'auto': true,
		'multi': true,
		'sizeLimit': 2097152,
		'queueSizeLimit': 3,
		onComplete: function(event, queueID, fileObj, response, data) {
			$('#upload-resume'+queueID+' .cancel').fadeOut();
			$('form').append('<input type="hidden" name="resume_files[]" value="'+fileObj.name.replace('"','')+'">');
			return false;
		}
	});

	// $.address.change(function(event) {
	// 	if (event.value == '/email-us') {
	// 		$('#pop-email').click();
	// 	}
	// 	else if (event.value == '/phone-us') {
	// 		$('#pop-phone').click();
	// 	}
	// });

	// Samples Resume
	if ($('body.resume').exists()){
		var $panels = $('body.resume .resumes img');
		var $container = $('body.resume .resumes');
		$container.css('width', $panels[0].offsetWidth * $panels.length);

		$.address.change(function(event) {
			if (event.value == '/') {
				var panelInt = 1;
			} else {
				var panelInt = parseInt(event.value.replace('/', ''));
			}
			if ($('a.old').exists()){
				$container.css('margin-left', -1 * panelInt * $panels[0].offsetWidth);
			} else {
				$container.css('margin-left', (1 - panelInt) * $panels[0].offsetWidth);
			}
			$('body.resume .nolite a').filter('[href='+panelInt+']').addClass('selected').siblings('a.selected').removeClass('selected');
		});

		$('body.resume .nolite a').click(function() {
			$.address.value($(this).attr('href'));
			return false;
		});

		$('a.info-btn').toggle(
			function() {
				$('.info').slideDown();
				$('a.info-btn').addClass('selected');
			},
			function() {
				$('.info').slideUp();
				$('a.info-btn').removeClass('selected');
			}
		);

		$('.info-teaser a').click(function() {
			$('a.info-btn').click();
		});

		var $subtitleLength = $('.sub-title h3').html().length;
		if ($subtitleLength > 24) {
			$('.sub-title h3').css({'font-size':'23px'});
		}

	}

	// Our Process
	if ($('body.our-process').exists()){
		$('.drop-special').toggle(
			function() {
				$(this).parent().siblings('.hidden').slideDown();
			},
			function() {
				$(this).parent().siblings('.hidden').slideUp();
			});
	}

	// Our Services
	if ($('body.our-services').exists()){
		var toFixHeight = Math.round($('.col2.narr').offset().top+8);
		var maxHeight = Math.round($('#pre-footer').offset().top - $('.col2.narr').height());
		var addHeight = 228; // 2*Math.round($('.hidden').height());
		adjustQuote();

		$('.drop-special').toggle(
			function() {
				$(this).siblings('.hidden').slideDown().addClass('expanded');
				if (($(window).scrollTop() >= (maxHeight-addHeight)) && ($(window).scrollTop() < (maxHeight))) {
					$('.col2.narr').css({'position':'absolute','top':$(window).scrollTop()}).animate({'top':(maxHeight-addHeight-8)});
				} else if ($(window).scrollTop() >= maxHeight) {
					$('.col2.narr').animate({'top':(maxHeight-addHeight-8)});
				}
			},
			function() {
				$(this).siblings('.hidden').slideUp().removeClass('expanded');
				if ($(window).scrollTop() >= (maxHeight-addHeight)) {
					$('.col2.narr').animate({'top':($(window).scrollTop()-8)});
				} else if ($(window).scrollTop() >= maxHeight) {
					$('.col2.narr').animate({'top':(maxHeight-8)});
				}
			});
	}

	// The Works
	if ($('body.the-works').exists()){
		$('.col2.narr').css({'position':'relative'});
		var toFixHeight = Math.round($('.scroll-quote').offset().top);
		var maxHeight = Math.round($('.hilite').offset().top - $('.scroll-quote').height());
		scrollQuote();

		$('.drop-special').toggle(
			function() {
				$(this).parent().siblings('.hidden').slideDown();
				return false;
			},
			function() {
				$(this).parent().siblings('.hidden').slideUp();
				return false;
			});
	}

	// Free Resume Help
	if ($('body.free-land').exists()){
		var textHeight = $('#ask textarea').height();
		$('#ask textarea').focus(function(){
			$(this).css({'overflow':'auto'}).animate({height:100});
		});
		$('#ask textarea').blur(function(){
			$(this).css({'overflow':'hidden'}).animate({height:textHeight});
		});
	}

	// Right Fit
	if ($('body.right-fit').exists()){
		$('.col2.narr').css({'position':'relative'});
		var toFixHeight = Math.round($('.scroll-quote').offset().top);
		var maxHeight = Math.round($('#pre-footer').offset().top - $('.scroll-quote').height());
		scrollQuote();
	}

	// Choose Writer
	if ($('body.choose-writer').exists()){
		$('.col2.narr').css({'position':'relative'});
		var toFixHeight = Math.round($('.scroll-quote').offset().top);
		var maxHeight = Math.round($('.cols2.hdash').offset().top - $('.scroll-quote').height());
		scrollQuote();
	}

	// DIY
	if ($('body.diy').exists()){
		$('.col2.narr').css({'position':'relative'});
		var toFixHeight = Math.round($('.scroll-quote').offset().top);
		var maxHeight = Math.round($('.cols2.hdash').offset().top - $('.scroll-quote').height());
		scrollQuote();
	}

	// Quiz
	if ($('body.quiz').exists()){
		$('input[name="email_quiz_submit"]').after('<span> or just <a href="javascript:$(\'#hd, #bd\').jqprint({ operaSupport: true });" class="btn">print this page</a></span>');
		$('h4.drop-results').click(function(){
			if ($(this).hasClass('print')) {
				$('#hd, #bd').jqprint({ operaSupport: true });
			} else {
				$(this)
					.html('<a href="javascript:$(\'#hd, #bd\').jqprint({ operaSupport: true });">Print This Page</a>')
					.addClass('print')
					.siblings('.hidden').slideDown(function(){
						$('body.quiz .col2 form .textbox').css({'position':'relative'});
					});
			}

            var YWATracker = YWA.getTracker("1000129461497");
            YWATracker.setAction(7);
            YWATracker.submit_action();

			return false;
		});
	}

	// Quote
	if ($('body.quote').exists()){
		$("#email-confirm").remove();
	}


	// Sidebar
	if ($('#who').exists()){

		var sb = $('#sb');
		var logo = $('h1 a');

		if ($('body.store').exists()){
			var toFixHeight = Math.round($('#who').offset().top - 660);
		}
		else {
			var toFixHeight = Math.round($('#who').offset().top - 560);
		}
		var winHeight = Math.round($('#ft').offset().top - toFixHeight + 67);

		adjustSidebar();

	}

	// Blog
	if ($('body.blog').exists()){

		if ($('.scrollable').exists()){
			var toFixHeight = Math.round($('.scrollable').offset().top+30);
		}
		if ($('#comments').exists()){
			var maxHeight = Math.round($('#comments').offset().top - 80);
		} else {
			var maxHeight = Math.round($('.callout').offset().top - 145);
		}

		adjustComments();

		var hash = window.location.hash;
		if (hash == "#comments") {
			$('#comments p.links').html('<a href="#" class="toggle">Hide Comments</a>');
		} else {
			$('#comments ol').addClass('hidden').hide();
			$('#comments p.links').html('<a href="#" class="toggle">Show Comments</a>');
		}

		console.log('Hash:',hash.indexOf('comment-'));

		if(hash.indexOf('comment-') > 0) {
			$('#comments p.links').html('<a href="#" class="toggle">Hide Comments</a>');
			$('#comments ol').removeClass('hidden').show();
		}

		$('#comments p.links').click(function(){
			checkComments();
			return false;
		});
		$('p.comments').click(function(){
			if ($('#comments ol').hasClass('hidden')) {
				$('#comments p.links').html('<a href="#" class="toggle">Hide Comments</a>');
				$('#comments ol').removeClass('hidden').fadeIn();
			}
		});

		function checkComments() {
			if ($('#comments ol').hasClass('hidden')) {
				$('#comments p.links').html('<a href="#" class="toggle">Hide Comments</a>');
				$('#comments ol').removeClass('hidden').fadeIn();
			} else {
				$('#comments p.links').html('<a href="#" class="toggle">Show Comments</a>');
				$('#comments ol').addClass('hidden').fadeOut();
			}
			return false;
		}

		$('#comments h3').css({'cursor':'pointer'}).click(
			function() {
				$('#comments p.links').click();
			});
	}

	// Global Functions
	$(window).resize(function() {
		adjustBlogTab();
	});

	adjustBlogTab();

	$(window).scroll(function() {
		if ($('#who').exists()){
			adjustSidebar();
		}
		if ($('body.our-services').exists()){
			adjustQuote();
		}
		if ($('.scrollable').exists()){
			adjustComments();
		}
		if ($('.scroll-quote').exists()){
			scrollQuote();
		}
	});

	function adjustQuote() {
		if (($(window).scrollTop() >= (maxHeight-addHeight)) && ($('.hidden').hasClass('expanded') == true)) {
				$('.col2.narr').css({'position':'absolute', 'top': (maxHeight-addHeight-8), 'left':'744px'});
		} else if ($(window).scrollTop() >= maxHeight) {
			$('.col2.narr').css({'position':'absolute', 'top': (maxHeight-8), 'left':'744px'});
		} else if ($(window).scrollTop() >= toFixHeight) {
			$('.col2.narr').css({'position':'fixed', 'top':'-8px', 'left':'744px'});
		} else {
			$('.col2.narr').css({'position':'static', 'top':'auto', 'left':'auto'});
		}
	}

	function scrollQuote() {
		$('.scroll-quote').css({'width':'205px'});
		if ($(window).scrollTop() >= maxHeight) {
			$('.scroll-quote').css({'position':'absolute', 'top': (maxHeight - $('.col2.narr').offset().top + 6), 'left':'0'});
		} else if ($(window).scrollTop() >= (toFixHeight - 6)) {
			$('.scroll-quote').css({'position':'fixed', 'top':'6px', 'left':'744px'});
		} else {
			$('.scroll-quote').css({'position':'static', 'top':'auto', 'left':'auto'});
		}
	}

	function adjustSidebar() {
		if ($(window).scrollTop() >= toFixHeight) {
			sb.css({ 'position': 'absolute', 'top': toFixHeight, 'height': winHeight, 'min-height':0 });
			logo.css({ 'position': 'absolute', 'top': toFixHeight-136});
		} else {
			sb.css({ 'position': 'fixed', 'top': '0px', 'height': 'auto', 'min-height':'100%'});
			logo.css({ 'position': 'fixed', 'top': '10px'});
		}
	}

	function adjustComments() {
		if ($(window).scrollTop() >= maxHeight) {
			$('.scrollable').css({ 'position': 'absolute', 'top': (maxHeight-$('.meta').offset().top-30), 'left':'auto'});
		} else if ($(window).scrollTop() >= toFixHeight) {
			$('.scrollable').css({ 'position': 'fixed', 'top': '-30px', 'left':'258px'});
		} else {
			$('.scrollable').css({ 'position': 'absolute', 'top': '0', 'left':'0'});
		}
	}

	function adjustBlogTab() {
		if ($(window).width() > 1350) {
			var newWidth = $(window).width() - 1250;
			$('#tab').css({'width': newWidth, 'position':'fixed', 'top': 0});
		} else if ($(window).width() > 1200) {
			$('#tab').css({'width': 100, 'position':'fixed', 'top': 0});
		} else if ($(window).width() > 1100) {
			var newWidth = $(window).width() - 1100;
			$('#tab').css({'width': newWidth, 'position':'fixed', 'top': 0});
		} else {
			$('#tab').css({'width': 0, 'position':'absolute', 'top':0});
		}
	}

	// Forms
	$('input').filter('[type=checkbox], [type=radio]').checkBox();

	$('input, textarea').focus(function(){
		$(this).siblings('.required').hide();
	});

	$('input, textarea').blur(function(){
		$(this).siblings('.required').show();
	});

	$('#ask_anything_form').submit(function(e){
	   $.post($(this).attr('action'), $(this).serialize(), function(data){
	       $('#ask_anything_form').fadeOut();
	       $('#ask_anything_form').after("<p><strong>Thank you!</strong></p><p>We'll get back to you with a personal response within 72 hours.</p>");
	   });
	   e.preventDefault();
	});

	// Email and Phone Us
	$bgHeight = parseInt($('#wrap').height())+parseInt($('#wrap').css('padding-top'));

	$('#pop-email, a[href$="#email-us"]').click( function() {
		if ($('body.about-us').exists()){
			$('.peekaboo span').css({'z-index':799});
		}
		$('#bg').css({'height':$bgHeight,'opacity':0.8}).fadeIn();
		$('#phone-us').fadeOut();
		$('#email-us').fadeIn();
		return false;
	});

	$('#pop-phone, a[href$="#phone-us"]').click( function() {
		if ($('body.about-us').exists()){
			$('.peekaboo span').css({'z-index':799});
		}
		$('#bg').css({'height':$bgHeight,'opacity':0.8}).fadeIn();
		$('#email-us').fadeOut();
		$('#phone-us').fadeIn();
		return false;
	});

	$('#bg').click( function(){ closeModal(); });
	$('#phone-us img').click(function(){ closeModal(); return false; });
	$('#email-us img').click(function(){ closeModal(); return false; });
	$('#uk img').click(function(){ closeModal(); return false; });

	function closeModal() {
		$('#bg').fadeOut(function(){
			if ($('body.about-us').exists()){
				$('.peekaboo span').css({'z-index':901});
			}
		});
		$('#phone-us').fadeOut();
		$('#email-us').fadeOut();
		$('#uk').fadeOut();
		// window.location.hash = "#/";
		return false;
	}

	// Add the correct quotes for IE6
	$("q, blockquote p").prepend("“").append("”");
	$("q q, blockquote q").prepend("‘").append("’");

	// Add classes to inputs for IE6
	// $("input[type='text'], input[type=’password’]").addClass("text");
	// $("input[type=’button’], input[type=’submit’], input[type=’checkbox’], input[type=’image’], input[type=’radio’], input[type=’reset’], button").addClass("nontext");
	// $("input[type=’button’], input[type=’submit’], input[type=’reset’], button").addClass("button");

});

jQuery.validator.addMethod("defaultInvalid", function(value, element) {
		return value != element.defaultValue;
	}, "Please don't use default values.");

function noErrors() {
	if (!$('fieldset.errors ul li:visible').exists()){
		$('fieldset.errors').remove();
	}
}

$(window).load( function() {
	if ($('body.about-us').exists()){

		var $us = $('h2 strong span');
		var $usStartx = ($us.offset().left - parseInt($('#bd').css('padding-left')) - 40);
		var $art = $('img.art');
		var $usOffsetx = ($art.offset().left - parseInt($('#bd').css('padding-left')) - 40 + ((165 - $us.width())/2) );
		var $xOffset = Math.round($usOffsetx - $usStartx);
		var $loliteStart = $('.lolite').height();

		$('.lolite p').css({'margin-right':($xOffset/2)});
		$art.css({
			'right':(parseInt($art.css('right')) + $xOffset),
			'bottom':(parseInt($art.css('bottom')) + ($('.lolite').height() - $loliteStart))
		});

	}

	// if ($('body.resume').exists()){
	//
	// 	$('a.info-btn')
	// 		.delay(1000)
	// 		.effect("bounce", { times:5, distance:10 }, 300)
	// 		.css({'position': 'absolute', 'top': '-42px', 'right': '5px'});
	//
	// }

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	$('html').addClass('mobile');
	var el1=$('#hd > h1 a');
	var el2=$('#wrap > #sb');
	var el3=$('#tab .tab');
	el1.css({
		position: 'absolute',
	});
	el2.css({
		position: 'absolute',
	});
	el3.css({
		position: 'absolute',
	})

	el1.offset({
		left:0,
		top:10
	});
	el2.offset({
		left:0,
		top:221
	});
	el3.offset({
		right:0,
		top:20
	});


	$(window).scroll(function(event) {
		el1.offset({
			top:$(this).scrollTop() + 10
		})
		el2.offset({
			top:$(this).scrollTop() + 221
		})
		el3.offset({
			top:$(this).scrollTop() + 30
		})
	});

}





});

jQuery.fn.exists = function(){return jQuery(this).length>0}
