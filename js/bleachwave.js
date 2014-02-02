var $ = jQuery.noConflict();
// Remove width and height from art-item img
$(window).load(function() {
	$(".thumb > img").each(function(){
		$(this).removeAttr("width").removeAttr("height");
	});
});
$(document).ready(function() {
	// Add fancy-amp class to ampersands in category titles
	$('#category-title:contains(&)').each(function(){
		$(this).html(
			$(this).html().replace('&amp;','<span class=\'fancy-amp\'>&amp;</span>')
		);
	});
	// Add "current-cat" class to currently-viewed category on category pages
	var currentUrl = window.location.pathname.split('/');
	if(currentUrl[1] == "category") {
		var categoryTitle = $("#category-title").text();
		var categoryLink = $("a:contains('" + categoryTitle + "')");
		if(categoryTitle == "Photography") {
			// Fix bug where any category containing the word "Photography" gets current-cat
			$(".blog-menu,.main-sub-nav").find("a:contains('Digital Photography')").removeClass("current-cat");
		} else {
			$(".blog-menu,.main-sub-nav").find(categoryLink).addClass("current-cat");
		}
	}
	// Clicking anywhere on art-item opens link to gallery post
	$(".info").click(function(e) {
		if($(window).width() < 551) {
			var $artItem = $(this).parent('.art-item');
			if(!$artItem.hasClass('hovered')) {
				e.preventDefault();
				$('.art-item').removeClass('hovered');
				$artItem.addClass('hovered');
			}
		} else {
			e.preventDefault();
			var linkSrc = $(this).prev("a.thumb").attr("href");
			window.open(linkSrc, "_self");
		}
	});
	// Enlarge button on gallery pages triggers fancybox
	$(".enlarge-btn").click(function(e) {
		e.preventDefault();
		$.fancybox(this,{
			'transitionIn'  :   'elastic',
			'transitionOut' :   'elastic',
			'speedIn'           :   600, 
			'speedOut'          :   200, 
			'overlayShow'   :   true
		});
		return false;
	});
	// Clicking hamburger on mobile triggers nav-social
	$("#hamburger").click(function(e) {
		e.preventDefault();
		$("ul.main-nav").slideToggle(700);
	});
	// Add button classes to navigation buttons
	var $prevLink = $('.prev-post > a');
	var $nextLink = $('.next-post > a');
	if($prevLink.length || $nextLink.length) {
		$prevLink.addClass("btn secondary-btn");
		$nextLink.addClass("btn secondary-btn");
	}
	// Clicking cat/tag button toggles dropdown blog menu
	$(".cat-btn").click(function(e) {
		e.preventDefault();
		if($('.blog-menu').hasClass('opened')) {
			$('.blog-menu').removeClass('opened').attr('aria-hidden','true');
		} else {
			$('.blog-menu').addClass('opened').attr('aria-hidden','false');
		}
	});
	// Pressing escape key while inside blog menu closes menu
	$('.blog-menu').keydown(function(e) {
		if(e.which == 27) {
			e.preventDefault();
			$(this).removeClass('opened').attr('aria-hidden','true');
			$('.cat-btn').focus();
		}
	});
	// If Masonry exists
	if(typeof($.fn.masonry) != "undefined") {
		// Masonry for About page
		$("#facts-box").masonry({
			columnWidth: '.fact',
			gutter: '.sizer'
		});
		// Masonry for Art Tags page
		$("#art-tags").masonry({
			columnWidth: '.tags',
			gutter: '.sizer'
		});
		// Masonry for Gallery & Archive pages
		var $container = $("#art-item-wrap");
		$container.imagesLoaded(function() {
			$container.masonry({
				columnWidth: '.art-item',
				gutter: '.sizer'
			});
		});
	}
	// Accessibility for art items
	$('body').on('focus','.art-item',function(e) {
		$(this).addClass('hovered');
	}).on('blur','.art-item',function(e) {
		$(this).removeClass('hovered');
	});
});