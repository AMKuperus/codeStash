<?php
################################################################################
###############################@author: AMKuperus###############################
####################Functions usefull for checking passwords####################


//If $pass is bigger then or 8 and smaller then 72(limit for BCRYPT) return true
//Change the $min for a different minimal number.
function passLength($password) {
  $min = 8;
  if(strlen($password) >= $min && strlen($password) < 72) {
    return true;
  }
}

//Check if $pass contains small letter capital digit and special char and returns true if so.
function passContains($password) {
  //Check for small letters a-z
  $letter = preg_match('/[a-z]/', $password);
  //Check for capital letters A-Z
  $capital = preg_match('/[A-Z]/', $password);
  //Check for digits \d
  $digit = preg_match('/\d/', $password);
  //Check for special characters ^a-zA-Z\d (if there is anything else then a-z/A-Z/\d)
  $special = preg_match('/[^a-zA-Z\d]/', $password);
  if($letter && $capital && $digit && $special) {
    return true;
  }
}

?>
