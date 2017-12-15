<?php

$x=1;

function WoofMeow($x) {

    for ($x=1; $x <= 100; $x++) {
      echo " <br>  $x  ";

    if( $x % 3 == 0 ) {
      echo "woof";

    }
    if($x % 5 == 0){
      echo "meow";
    }
    else{
      echo "";
    }
  }
}


echo WoofMeow($x);

?>
