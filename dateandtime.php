<?php
$cart_array= array("WonderBread","Pickles","Moyannaise","Lettuce");
echo $cart_array[0];
echo "<br/>";
echo $cart_array[1];
echo "<br/>";
echo $cart_array[2];
echo "<br/>";
echo $cart_array[3];
echo "<br/>  <hr/>";
echo serialize($cart_array);
?>