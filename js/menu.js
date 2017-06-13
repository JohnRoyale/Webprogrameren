//This function toggles class for the menu to dropdown
$(document).ready(function() {
	$('#sidebar-btn').click(function() {
		$('header').toggleClass('visible')
		$('#sidebar-btn').toggleClass('visible')
	});
});
//This function toggles help visibility
$(document).ready(function() {
	$('#help').click(function() {
		$('aside').toggleClass('visible')
	});
});
//This function checks url and activate correct page in menu
$(function() {
	var loc = window.location.href; // returns the URL
	if (/index/.test(loc)) {
		$('#index').addClass('active');
	}
	if (/checkers/.test(loc)) {
		$('#checkers').addClass('active');
	}
});