var advanced_toggle = $('#advanced-toggle');
var advanced = $('#advanced');
var jumbotron = document.getElementsByClassName('jumbotron')[0];
var arrow = document.getElementById('arrow');
var expanded = false;

advanced_toggle.click(function(event) {
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
});

function back() {
	window.history.go(-1);
}