<?php
	$message="Hello World";
	print $message;
unset ($message);

$message="\n Second world";
echo "$message";	

$a = 5;
$b = 7;
$amt = $a%$b;
echo "Modulus operation gives: ".number_format($amt);

$c=$a+$b;
echo"<br/>";
echo "The sum of a and b is <br/>" .$c;
for ($i = 1; $i <= 100; $i++) {
echo "<br/>".$i;
}
?>
