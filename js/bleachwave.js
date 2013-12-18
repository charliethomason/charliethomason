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
	// Preformatted code snippet styling
	$(function() {
		var $pre = $('pre');
		$pre.html($pre.html()
			.replace(/\$/g, '<span class="code-orange">$</span>')
			.replace('var','<span class="code-green">var</span>','g')
			.replace('("','(<span class="code-green">"','g')
			.replace('")','"</span>)','g')
			.replace('if(','<span class="code-orange">if</span>(','g')
			.replace('else','<span class="code-orange">else</span>','g')
			.replace('function','<span class="code-ltgreen">function</span>','g')
			.replace('.click','.<span class="code-yellow">click</span>','g')
			.replace('.focus','.<span class="code-yellow">focus</span>','g')
			.replace('.keydown','.<span class="code-yellow">keydown</span>','g')
			.replace('.resize','.<span class="code-yellow">resize</span>','g')
			.replace('.on','.<span class="code-yellow">on</span>','g')
			.replace(/[^'](\d+)/g,' <span class="code-blue">$1</span>')
			.replace('(document','(<span class="code-violet">document</span>','gi')
			.replace('(window','(<span class="code-violet">window</span>','gi')
		);
		$pre.after('<p class="code-hide"><a href="#">Hide this code snippet</a></p>' +
			 '<p class="code-show"><a class="code-btn" href="#">Click here to view code snippet.<br>' +
			 'Some code snippets may not display correctly on mobile devices.</a></p>');
		$('.code-btn').click(function(e) {
			e.preventDefault();
			var $codeShow = $(this).parent('.code-show');
			$codeShow.hide();
			$codeShow.siblings('.code-hide').show();
			$codeShow.siblings('pre').show();
		});
		$('.code-hide > a').click(function(e) {
			e.preventDefault();
			var $codeHide = $(this).parent('.code-hide');
			$codeHide.siblings('pre').slideUp('fast',function() {
				$codeHide.siblings('.code-show').show();
				$codeHide.hide();
			});
		});
	});
});