<?php
if(isset($_POST['submit']))
{
	$crpwd=$_POST['crpwd'];
	$npwd=$_POST['npwd'];
	$cpwd=$_POST['cpwd'];
	include "../db/config.php";
	$sql="update admin_master set password='".$npwd."' where password='".$crpwd."' and userid='".$_SESSION['uid']."'";
	$q=mysql_query($sql);
	if($q)
	{
	$msg="Password changed succesfully";
	}
	else
	{
		$msg="Invalid Password";
		
	}
}
	
?>
<div class="wrapper row4">
<div id="container" class="clear">
<center><h1>Change password</h1>
<div>
<form method="post" id="chngpwdform">
<table>
<tr><td>Current Password </td><td><input type="password"name="crpwd"/></td></tr>
<tr><td>New Password </td><td><input type="password"name="npwd"id="pass"/></td></tr>
<tr><td>Confirm Password</td><td><input type="password"name="cpwd"/></td></tr>
<tr><td></td><td><input type="submit"value="submit"name="submit"/></td></tr>
</table>
<span class="invmsg">
<?php
if (isset($msg))
{
	echo $msg;
}
?>
</span>

</form>
</div>
</center>
</div>
</div>
