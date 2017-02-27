
//Handle random colors for button
var colors = ["#57607c", "#1add9f", "#18d2ba", "#4894f0", "#b490f5", "#f45b93", "#ff1a4f", "#ff8463", "#ffbf00"];

var random = Math.floor((Math.random() * 9) + 1); // max, min

console.log(random);

var button = document.getElementById("submitButton");

button.style.backgroundColor = colors[random - 1];


