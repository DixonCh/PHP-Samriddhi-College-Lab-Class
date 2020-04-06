<?php
//define a variable thats holds a url string value
$url="http://www.labaneal.com";
//use phps "str_replace" build in function to remove what we need did not want in the value 
$new_url=str_replace("http://www.","",$url);
//now echo out the new adjusted value to view
echo "$new_url";

?>