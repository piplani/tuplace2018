var advanced_toggle = $('#advanced-toggle');
var arrow = document.getElementById('arrow');
var advanced = $('#advanced');
var expanded = false;
advanced_toggle.click(function() {
	if(expanded) {
		advanced.slideUp();
		arrow.style.transform="rotate(0deg)";
	}
	else {
		advanced.slideDown();
		arrow.style.transform="rotate(180deg)";
	}
	expanded = !expanded;
})