<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{

	$pas="e10adc3949ba59abbe56e057f20f883e";
	$user=$_POST['user'];
	$password=md5($_POST['password']);
	
	if($user=="ram" && $password==$pas)
	{
		header("Location:dashboard.php?user=$user");
	}
	else
	{
		echo "User or password doesn't match please try again";
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
<legend>Login</legend>
<form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
User
<br>
<input type="text" name="user" maxlength=30 /><br>
Password
<br>
<input type="password" name="password" />

<br>
<input type="submit" value="submit">
</fieldset>
</form>
</body>
</html>