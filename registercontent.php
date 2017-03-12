<?php
if(isset($_POST['signup']))
{
	$name=$_POST['name'];
	$address=$_POST['address'];
	$dob=$_POST['dob'];
	$userid=$_POST['uid'];
	$sem=$_POST['sem'];
	$tenthpercent=$_POST['10thpercent'];
	$twelevthpercent=$_POST['12thpercent'];
	$btechcgpa=$_POST['btechcgpa'];
	$mob=$_POST['mobno'];
	$email=$_POST['eid'];
	$pwd=$_POST['pwd'];
	$cpwd=$_POST['cpwd'];
	$secq=$_POST['secq'];
	$ans=$_POST['answer'];
	include "db/config.php";
	$q=mysqli_query($connection,"insert into user_master values('".$name."','".$address."','".$dob."','".$userid."','".$sem."','".$tenthpercent."','".$twelevthpercent."','".$btechcgpa."','".$mob."','".$email."','".$pwd."','".$cpwd."','".$secq."','".$ans."')");
	if($q)
	{
		header('location:success.php');
	
	}
}

?>

<div class="wrapper row4">
  <div id="container" class="clear">
<center><h1> create an account </h1>
<h1> welcome to register </h1>
<div class="regdiv">
<form method="post" id="regform">
<table>
<tr><td>Name </td><td><input type="text"name="name"/></td></tr>
<tr><td>Address </td><td><input type="text"name="address"/></td></tr>
<tr><td>DOB </td><td><input type="text"name="dob"/></td></tr>
<tr><td>Registration No(As Userid) </td><td><input type="text"name="uid"/></td></tr>
<tr><td>Semester </td><td><input type="text" name="sem"/></td></tr>
<tr><td>10th percentage </td><td><input type="text" name="10thpercent"/></td></tr>
<tr><td>12th percentage</td><td> <input type="text" name="12thpercent"/></td></tr>
<tr><td>Btech (cgpa) </td><td><input type="text" name="btechcgpa"/></td></tr>
<tr><td>Mobile no</td><td> <input type="text" name="mobno"/></td></tr>
<tr><td>Emailid </td><td><input type="text" name="eid"/></td></tr>
<tr><td>Password</td><td><input type="password"name="pwd" id="pass"/></td></tr>
<tr><td>Confirmpassword</td><td><input type="password" name="cpwd"/></td></tr>
<tr><td>Securityquestion</td><td>  
 <select name="secq">
<option>your first school</option>
<option>your nick name</option>
<option>your fav color</option>
</select></td></tr>
<tr><td>Answer  </td><td><input type="text"name="answer"/></td></tr>
<tr><td></td><td><input type="submit"value="signup"name="signup"/></td></tr>
</table>
</form>
</div>
</center>
</div>
</div>
