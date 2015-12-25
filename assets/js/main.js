//======================
//main.js Document
//======================

// Copyright 2014-2015 Twitter, Inc.
// Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
	var msViewportStyle = document.createElement('style')
	msViewportStyle.appendChild(
		document.createTextNode(
			'@-ms-viewport{width:auto!important}'
		)
	)
	document.querySelector('head').appendChild(msViewportStyle)
}

//空链接处理
$(function() {
	$(document).find("a[href=#]").attr("href", "javascript:void(0)");
});

//焦点图
$('.carousel').carousel({
  interval: 3000
})

//bootstrap-hover-dropdown.js
//导航滑过
$(document).ready(function() {
	$('.js-activated').dropdownHover().dropdown();

});

//jquery.scrollUp.min.js
//返回顶端
$(function() {
	$.scrollUp({
		scrollName: "scrollUp",
		animation: "fade",
		scrollText: '<i class="fa fa-angle-up"></i>', //Default: 'Scroll to top'
	});
});

//气泡
$(function() {
	$('[data-toggle="popover"]').popover();
});