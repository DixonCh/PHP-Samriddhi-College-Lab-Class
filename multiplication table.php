//Program to print the Multiplication Table of 2
<?php
//Multiplication Table
echo "<!DOCTYPE html>
<head>
<title>
Multiplication Table of 2 
</title>
</head>
<body>";
echo "<table border=1 align=center width=300px>";
echo "<tr><td> Multiplication Table of 2 </td> </tr>";
$num=2;
for($i=1;$i<=10;$i++)
{
	echo "<tr><td>".$num."x".$i."=".$i*$num."</td></tr>";
}
echo"</table></body></html>";
?>
