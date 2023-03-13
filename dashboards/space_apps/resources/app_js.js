function toggle(element) {
    var x = document.getElementById(element);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

function changeTop() {
	if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
		document.getElementById("navBar").classList.add("w3-black", "w3-animate-opacity");
	} else {
		document.getElementById("navBar").classList.remove("w3-black", "w3-animate-opacity");
	}
}
	
window.onscroll = function() {
	changeTop();
}
	
var slideIndex = 0;
showSlides();
	
function showSlides() {
	var i;
	var slides = document.getElementsByClassName("headers");
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	slideIndex++;
	if (slideIndex > slides.length) {
		slideIndex = 1;
	}
	slides[slideIndex - 1].style.display = "block";
	setTimeout(showSlides, 6000); 
}
