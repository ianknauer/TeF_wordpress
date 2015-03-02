// Hide and show author box and comments
jQuery(document).ready(function($){
	$(".hider a").click(function(){
		$("#metaHide").slideToggle('slow');
		$(this).text($(this).text() == unescape('Comments %u2193') ? unescape('Comments %u2191') : unescape('Comments %u2193'));
		return false;
	});
});