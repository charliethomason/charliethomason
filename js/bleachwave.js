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
		e.preventDefault();
		var linkSrc = $(this).prev("a.thumb").attr("href");
		window.open(linkSrc, "_self");
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
	// Clicking categories button on mobile opens category menu
	$("#search-nav-menu > .cat-btn").click(function(e) {
		if($(window).width() < 550) {
			e.preventDefault();
			$(this).next('.blog-menu').slideToggle();
		}
	});
	// If Masonry exists
	if(typeof($.fn.masonry) != "undefined") {
		// Masonry for About page
		$("#facts-box").masonry({
			columnWidth: '.fact',
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
	$('body').on('focus','.art-item',function(e) {
		$(this).addClass('hovered');
	}).on('blur','.art-item',function(e) {
		$(this).removeClass('hovered');
	});
});