<?php
$twister="Peter price piper pickePPd a peck of pickled peppers";
$twister2="Peter price wRRRRRRRRRRRRR picked a peck of pickled peppers";

print("location of 'p' is ".strpos($twister,'p').'<BR>');
print("location of 'q' is ".strpos($twister,'q').'<BR>');
print("reverse of 'q' is ".strrev($twister).'<BR>');
$result=strcmp($twister,$twister2);
if($result!=0)
{
	echo "The string do not match";
	
}
else {
	echo "The sring matches";
}
$mystring=wordwrap($mystring,24,"<br/>");
echo $mystring;
echo"<hr/>";
$mystring="word long wrap";
$mystring=wordwrap($mystring,24,"<br/>",true);
echo $mystring;


	?>
