<?php
session_start();
if(isset($_POST['login']))
{
	$uid=$_POST['uid'];
	$pwd=$_POST['pwd'];
	include "db/config.php";
	$sql="select * from user_master where uid='".$uid."' and pwd='".$pwd."'";
	$q=mysql_query($sql);
	if($arr=mysql_fetch_array($q))
	{
	$_SESSION["uid"]=$uid;
	header("location:userhome.php");	
	}
	else
	{
		$msg="Invalid UserId or Password";
		
	}
}
	
?>
<div class="wrapper row4">
  <div id="container" class="clear">
<center>
<h1>LOGIN PANEL</h1>
<form method="post" id="loginform">
<table>
<tr><td>Userid:</td><td><input type="text" name="uid"/></td></tr>
<tr><td>Password:</td><td><input type="password" name="pwd"/></td></tr>
<tr><td></td><td><input type="submit" value="login" name="login"/></td></tr>
<tr><td colspan="2">
</td>
</tr>
<tr><td><a href="forgot.php">Forgot Password?</a></td>
<td><a href="register.php">NewUser?SignUp</a></td></tr>
</table>
</form><br/>
</center>
</div>
</div>