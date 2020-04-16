//Program to show the example of concatenation in PHP
<?php
$statement='everything I say'; 
$question_1="Do you have to take $statement so literally?"\n<BR>;
echo $question_1;
$sport1='volley';
$sport2='foot';
$paln3="I will play $sport1ball in the fall"; //wrong
$plan2="I will play $sport2ball in the fall";
$plan1="I will play {$sport1}ball in the summertime"; //right
$short_string="This string has 29 charcters";
print("It does have ".strlen($short_string)."characters");
?>
