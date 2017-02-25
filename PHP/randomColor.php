<?php
################################################################################
###############################@author: AMKuperus###############################
#############################Creates a random color#############################

//Returns a randomized Hexadecimal 7 character long (including #) string to be used
//for randomizing colors.
function randomColor() {
  $color = "#";
  while(strlen($color) < 7) {
    $color .= createHex();
  }
  return $color;
}

//Returns a random hexadecimal number
//First creates a random int between 0 and 15
//Second makes it a Hexadecimal with dechex()
function createHex() {
  $r = mt_rand(0, 15);
  $h = dechex($r);
  return $h;
}
?>
