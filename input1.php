<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$choice=$_POST['choice'];
	if($choice=='add')
		{
			$total=$num1+$num2;
			echo "The sum of ".$num1." and " .$num2. " is " .$total;
		}
	elseif($choice=='sub')
		{
			$subs=$num1-$num2;
			echo "The Subtratction of ".$num1." and " .$num2. " is " .$subs;

		}
	elseif($choice=='mul')
		{
		$multi=$num1*$num2;
			echo "The Multiplication of ".$num1." and " .$num2. " is " .$multi;

		}
	elseif($choice=='div')
		{
		$div=$num1/$num2;
			echo "The div of ".$num1." and " .$num2. " is " .$div;

		}
		elseif($choice=='modulo')
		{
			$modulo=$num1%$num2;
		echo "The modulo of".$num1." and " .$num2. " is " .$modulo;
		}

		
		}
	
}
?>

<!DOCTYPE html>
<html>
<head>
<title>
User input
</title>
</head>
<body>
<fieldset>
<legend>Simple Calculation</legend>
<form method="POST" action="<?=$_SERVER['PHP_SELF']?>">  <!php_self= process in the same page >
Enter the number
<br>
<input type="number" name="num1" /><br>
Enter the Second number
<br>
<input type="number" name="num2" />
<br>
<input type="radio" name="choice" value="add" />Add                                          <!updated inpute type =number so that html can validate  html5 inpute type has been changed>
<input type="radio" name="choice" value="sub" />Subtract
<input type="radio" name="choice" value="mul" />Multiply
<input type="radio" name="choice" value="div" />Division  
<input type="radio" name="choice" value="modulo" />modulo
<input type="radio" name="choice" value="factorial" />factorial

<br>
<input type="submit" value="submit">
</fieldset>
</form>
</body>
</html>