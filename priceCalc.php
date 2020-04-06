<?php
	echo "calculation of predefined value";
	echo"<br/>";
	$qty=5;
	$price=10000;
	$amt=$qty*$price;
	echo"<br/>";
	echo "$qty*$price=Rs.".number_format($amt,2);
?>