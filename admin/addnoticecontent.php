<?php
if(isset($_POST['add']))
{
	$notice=$_POST['notice'];
	$publishdate=date('d/m/y');
	include "../db/config.php";
	$sql="insert into notice_details values('','".$notice."','".$publishdate."')";
	$q=mysql_query($sql);
	if($q)
	{
	echo "updated successfully";
	}
}
	
?>
<div class="wrapper row4">
<div id="container" class="clear">
<div>
<center>
<h1>Add New Notice</h1>
<br />
<form method="post">
<table>
<tr><td><h1>Notice:</h1></td><td><textarea name="notice"></textarea></td></tr>
<tr><td></td><td><input type="submit" name="add" value="add"/></td></tr>
</table>
</form>
</center>
</div>
</div>
</div>
