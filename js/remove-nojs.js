// remove nojs
document.documentElement.classList.remove("nojs");

// random tagline
var taglines = document.getElementById("tagline").getElementsByClassName("candidate-tagline");
var rand_tagline = taglines[Math.floor(Math.random() * taglines.length)];
var default_tagline = document.getElementById("default-tagline");

default_tagline.setAttribute("hidden", "");
rand_tagline.removeAttribute("hidden");
