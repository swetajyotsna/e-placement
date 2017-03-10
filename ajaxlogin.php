<?php
session_start();
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];
$con=mysql_connect("localhost","root","");
mysql_select_db("placement",$con);
$sql="select * from user_master where uid='".$uid."' and pwd='".$pwd."'";
$q=mysql_query($sql);
if($arr=mysql_fetch_array($q))
{
echo "success";
}
else
{
 echo "Invalid UserId or Password";	
}

?>