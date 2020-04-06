
<?php
/*$cart_array[4]="wonder Bread";
$cart_array[5]="pickles";
$cart_array[6]="moyannaise";
$cart_array[7]="Lettuce";
echo $cart_array[4];
echo "<br/>";
echo $cart_array[5];
echo "<br/>";echo $cart_array[6];
echo "<br/><hr/>";
echo serialize($cart_array);
*///create an associative array that is a cart holding items and prices
/*$cart_array=array("cereal"=>"5.00","cofee bean"=>"2.50","bananas"=>"3.50","onion"=>"1.00","lettuce"=>"2.40", "tomato"=>"1.00");
echo "<br/><br/>";
echo serialize($cart_array);
echo "<br/><br/>";
print_r($cart_array);
*/
//Multidiamensional array
$members=array(
	"member1"=>array("name"=>"john","zodiac"=>"scorpio","country"=>"usa"),
	"member2"=>array("name"=>"susan","zodiac"=>"virgo","country"=>"Ireland"),
	"member3"=>array("name"=>"william","zodiac"=>"pisces","country"=>"Great Britian"),
	"member4"=>array("name"=>"Eduardo","zodiac"=>"leo","country"=>"mexico"));
$datasetCount=count($members);
echo "Member Count:$datasetCount<br/>";
echo "<h1>There are $datasetCount member</h1>";
$i=0;

foreach ($members as $each_member) {
	$i++;

	echo"<h2>Member $i</h2>";
	while(list($key,$value)=each($each_member))
	{
		echo"$key:$value<br/>";
	}
}



/*$cart_array=array("Milk","cheese","Egg","cereal","jelly");

$i=0;
foreach ($cart_array as $key => $value) 
{
$i++;
echo"Cart Item $i ___Key= $key \Value= $value <br/>";

}*/

$myArray
=
array("Joe","Edward","Louis");
echo
"Internal
Pointer
Position:
"
.
pos($myArray)
.
"<br
/>";
next($myArray);
echo
"Internal
Pointer
Position:
"
.
pos($myArray)
.
"<br
/>";
next($myArray);
echo
"Internal
Pointer
Position:
"
.
pos($myArray)
.
"<br
/>";
?>