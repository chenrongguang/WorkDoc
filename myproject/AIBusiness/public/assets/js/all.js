/*$(document).ready(function() {
	
	$(".nav-box .button_na").each(function() {
		var this_div = $(".nav-box .nav-po");
		var _inx = $(".navgation .button_na").index(this);
		$(this).click(
			function() { this_div.eq(_inx).slideToggle(); },
			function() { this_div.eq(_inx).slideToggle(); }
		);
	});
});
$(".nav-da p").each(function(i) {
	this.onclick = function() {
		localStorage.setItem("Menu_select", i);
	};
});
$(document).ready(function() {
	var selectId = localStorage.getItem("Menu_select");
	if(selectId == "" || selectId == null || selectId == "undefined") {
		selectId = 1;
	}
	$('.nav-da p').removeClass("curr");
	$(".nav-da p:eq(" + selectId + ")").addClass("curr");
});*/