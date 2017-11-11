<?php
/**
 * randomReferenceLogos adds funtion to display x-amount of random-picked logo's
 * @author      AM Kuperus
 * @copyright   GNU General Public License v3.0
 * @version     V1.0 11-11-2017
 */

  // showOff() generates $amountToShow-amount images picked random from $dir
  function showOff($dir, $amountToShow) {
    // Create array with filenames that are inside $dir
    $files = glob("$dir*.{png,jpg,gif}", GLOB_BRACE);
    // Create [] to store the filename we will show
    $show = [];
    // Push filenames to $show[] x-$amountToShow-times
    $i = 0;
    while ($i < $amountToShow) {
      // Generate random with max the amountb of files stored in $files
      $rand = mt_rand(0, count($files));
      // Store filename in $show[] if it isset() in $files[]
      if (isset($files[$rand])) {
        array_push($show, $files[$rand]);
        // Remove filename from $files[] so we don't get duplicates
        unset($files[$rand]);
        $i++;
      } else {
        // nothing so it tries again
      }
    }
    // Show the files we just gathered in $show[]
    echo '<div class="show-off-box">';
    $i = 0;
    foreach($show as $s) {
      echo '<figure class="flexin show-in-box"><img src=' . $s . ' width=100 height=100><figcaption>' . createName($s, $dir) . '</figcaption></figure>';
      $i++;
    }
    echo '</div>';
  }

  //Create a name for the picture by stripping extension and adding a capital.
  function createName($file, $dir) {
    //Create a array to define what to replace.
    $replace = array($dir, ".png", ".jpg", ".gif");
    //Strips the given $dir .png .jpg and .gif from a string.
    $name = str_replace($replace, "", $file );
    //Strip all _ and replace by whitespace.
    $name = str_replace("_", " ", $name);
    //Give every word a capital.
    $name = ucwords($name);
    return $name;
  }

  ?>
