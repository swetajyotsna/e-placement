<?php
include "db/config.php";
$uid=$_SESSION['uid'];
$sql="select * from user_master where uid='".$uid."'";
$q=mysql_query($sql);
if($arr=mysql_fetch_array($q))
{
	$name=$arr['name'];
	$address=$arr['address'];
	$dob=$arr['dob'];
	$uid=$arr['uid'];
	$sem=$arr['sem'];
	$tenthpercent=$arr['10thpercent'];
	$twelevthpercent=$arr['12thpercent'];
	$btechcgpa=$arr['btechcgpa'];
	$mobno=$arr['mobno'];
	$eid=$arr['eid'];
	$pwd=$arr['pwd'];
	$cpwd=$arr['cpwd'];
	$secq=$arr['secq'];
	$answer=$arr['answer'];
}


if(isset($_POST['upd']))
{
	$name=$_POST['name'];
	$address=$_POST['address'];
	$dob=$_POST['dob'];
	$sem=$_POST['sem'];
	$tenthpercent=$_POST['10thpercent'];
	$twelevthpercent=$_POST['12thpercent'];
	$btechcgpa=$_POST['btechcgpa'];
	$mob=$_POST['mobno'];
	$email=$_POST['eid'];
	
	$sql="update user_master set name='".$name."',address='".$address."',dob='".$dob."',sem='".$sem."',10thpercent='".$tenthpercent."',12thpercent='".$twelevthpercent."',btechcgpa='".$btechcgpa."',mobno='".$mob."',eid='".$email."' where uid='".$uid."'";
	$q=mysql_query($sql);
	if($q)
	{
		$msg="Updated Successfully";
		
	
	}
}

?>

<div class="wrapper row4">
  <div id="container" class="clear">
<center><h1> Update Your Profile</h1>
<div class="regdiv">
<form method="post" id="profileform">
<table>
<tr><td>Name </td><td><input type="text"name="name" value="<?php echo $name;?>"/></td></tr>
<tr><td>Address </td><td><input type="text"name="address" value="<?php echo $address;?>"/></td></tr>
<tr><td>DOB </td><td><input type="text"name="dob" value="<?php echo $dob;?>"/></td></tr>
<tr><td>Registration No(As Userid) </td><td><label><?php echo $uid;?></label></td></tr>
<tr><td>Semester </td><td><input type="text" name="sem" value="<?php echo $sem;?>"/></td></tr>
<tr><td>10th percentage </td><td><input type="text" name="10thpercent" value="<?php echo $tenthpercent;?>"/></td></tr>
<tr><td>12th percentage</td><td> <input type="text" name="12thpercent" value="<?php echo $twelevthpercent;?>"/></td></tr>
<tr><td>Btech (cgpa) </td><td><input type="text" name="btechcgpa" value="<?php echo $btechcgpa;?>"/></td></tr>
<tr><td>Mobile no</td><td> <input type="text" name="mobno" value="<?php echo $mobno;?>"/></td></tr>
<tr><td>Emailid </td><td><input type="text" name="eid" value="<?php echo $eid;?>"/></td></tr>

<tr><td></td><td><input type="submit"value="Update"name="upd"/></td></tr>
</table>
</form>
<h4 style="color:#F00"><?php if(isset($msg)) echo $msg;?></h4>
</div>
</center>
</div>
</div>
