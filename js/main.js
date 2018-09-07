var advanced_toggle = $('#advanced-toggle');
var arrow = document.getElementById('arrow');
var advanced = $('#advanced');
var jumbotron = document.getElementsByClassName('jumbotron')[0];
var expanded = false;
advanced_toggle.click(function() {
	if(expanded) {
		advanced.slideUp();
		arrow.style.transform="rotate(0deg)";
		jumbotron.style.height = "220px";
	}
	else {
		advanced.slideDown();
		arrow.style.transform="rotate(180deg)";
		jumbotron.style.height = "180px";
	}
	expanded = !expanded;
})