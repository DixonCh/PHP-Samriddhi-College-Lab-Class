<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
$num_to_guess=42;
if(!isset($_POST[guess])){
ECHO "WELCOME TO THE GUESSING MACHINE!";

}
elseif($_POST[guess]>$num_to_guess)
{
ECHO "$_POST[guess] is too big! Try a smaller number.";
}elseif($_POST[guess]<$num_to_guess)
{ECHO "$_POST[guess] is too small! truy a larger number.;

}
}else{// must be equivalent
ECHO "WELL DONE!";
}
?>
<html><head><title> An HTML form that calls itself</title></head><body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>"
method="POST">
<p><strong>Type your guess here:</strong><input type="text" name="guess"></p>
<p><input type="submit" value="submit your guess"></p>

</form></body>
</html>
