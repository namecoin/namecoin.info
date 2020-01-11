// remove nojs
document.documentElement.classList.remove("nojs");

// random tagline
var taglines = [
    '<strong>In information</strong><br />we <strong>trust</strong>.',
    'A <strong>trust anchor</strong><br />for the Internet.',
    '<strong>Against<br />censorship.</strong>',
    '<strong>Supporting<br />free speech.</strong>',
    'Decentralized<br /><strong>secure</strong> names.',
    '<strong>Decentralize</strong><br>all the things!',
    '<strong>Freedom</strong><br>of information.'
    ];
var rand = taglines[Math.floor(Math.random() * taglines.length)];
document.getElementById("tagline").innerHTML = rand;
