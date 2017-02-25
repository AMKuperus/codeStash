//@author: AMKuperus
//Create a 7-digit hexadcimal colorcode (including #) for use in CSS
function randomColor() {
  var color = "#";
  for (i = 0; i < 6; i++) {
    color += createColorNumber();
  }
  console.log(color);
  return color;
}

function createColorNumber() {
  var number = Math.floor(Math.random() * 16).toString(16);
  return number;
}
