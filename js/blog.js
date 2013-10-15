var $ = jQuery.noConflict();
if($("div.blog").hasClass("category-blog")) {
	var categoryTitle = $("#category-title").text();
	$(".blog-menu a:contains('" + categoryTitle + "')").addClass("current-cat");
}
$("a.more-link, .prev-post a, .next-post a").addClass("btn grey-btn");
$("ul.blog-menu").prepend("<li><a href='/blog'>All Posts</a></li>");