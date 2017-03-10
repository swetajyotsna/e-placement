<?php
session_start();
if(isset($_POST['login']))
{
	$uid=$_POST['userid'];
	$pwd=$_POST['pwd'];
	include "../db/config.php";
	$sql="select * from admin_master where userid='".$uid."' and password='".$pwd."'";
	$q=mysql_query($sql);
	if($arr=mysql_fetch_array($q))
	{
	$_SESSION["auid"]=$uid;
	header("location:dashboard.php");	
	}
	else
	{
		$msg="Invalid UserId or Password";
		
	}
}
	
?>
<div>
<center>
<img src="../image/images.jpg">
<h1>Admin Login Panel</h1>
<form method="post" id="loginform">
<table>
<tr><td>UserId:</td><td><input type="text" name="userid"/></td></tr>
<tr><td>Password:</td><td><input type="password" name="pwd"/></td></tr>
<tr><td></td><td><input type="submit" value="login" name="login" /></td></tr>
<tr><td colspan="2">
<span class="invmsg">
<?php
if(isset($msg))
{
	echo $msg;
}
?>
</span>
</td></tr>
<tr><td><a href="forgotpassword.php">Forgot Password?</a></td></tr>
</table>
</form>
<br />
</center>
</div>