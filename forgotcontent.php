<?php
if(isset($_POST['forgot']))
{
	$uid=$_POST['uid'];
	$secq=$_POST['secq'];
	$ans=$_POST['answer'];
	include "db/config.php";
	$sql="select * from user_master where uid='".$uid."' and secq='".$secq."' and answer='".$ans."'";
	$q=mysql_query($sql);
	if($arr=mysql_fetch_array($q))
	{
		$msg="Your password is: ".$arr["pwd"];
	}
	else
	{
	  $msg="Invalid input details";	
	}
}
?>
<div class="wrapper row4">
  <div id="container" class="clear">    
    <center>
    
    <h1>Forgot Password</h1>
    <form method="post"id="forgotform">
    <table>
    <tr><td>Userid: <input type="text" name="uid" /></td></tr>
    <tr><td>SecurityQuestion
    <select name="secq">
   <option>your first school</option>
<option>your nick name</option>
<option>your fav color</option>
     </select></td></tr>
    <tr> <td>Answer<input type="text" name="answer" /></td></tr>
    <tr><td><input type="submit" value="Submit" name="forgot"/></td></tr>
    
   <tr><td colspan="2">
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
   <tr><td><a href="index.php">Back To Login</a></td></tr>
   </table>
   </form>
    <br />
    </center>
</div>
</div>
