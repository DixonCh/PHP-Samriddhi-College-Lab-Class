<?php
/*$mystring=I wish to remove 'I wish' and any whitespaces.";
echo $mystring;
echo "<br />";
$newstring=ltrim($mystring,"I wish");
//trims the leading chars expected
echo $newstring;
?>*/


$myFormatString="%s has over %d build in functions!";
printf($myFormatString,"php","700");
$mystring="Here is my string";
$kaboom=explode(" ",$mystring); 	//use space as delimiter(break point )
foreach($kaboom as $key=>$value){
	echo "$value- is in the array at index $key<br />";
	
}
/*$mystring="Joes's BBQ Shack";
$newstring=addslashes($mystring);
$newstring=stripslashes($mystring);
$mystring="pravesh333";*/
$hashedstring=md5($mystring);
echo $hashedstring;

//echo $newstring;

?>

