<div class="wrapper row4">
  <div id="container" class="clear">

<form method="post">
<table border="5" width="50%" cellpadding="4" cellspacing="3">
<tr>
<th colspan="4"<br><h3>Manage notice</h3>
</th>
</tr>
<tr>
<th>slno</th>
<th>notice</th>
<th>publishdate</th>
<th>action</th>
</tr>


<?php
	include "../db/config.php";
	$sql="select * from notice_details";
	$q=mysql_query($sql);
	$slno=0;
	while($arr=mysql_fetch_array($q))
	{
		$slno++;
		$id=$arr["id"];
		$notice=$arr["notice"];
		$pdate=$arr["publishdate"];


		echo '<tr align="center">';
		echo '<td>'.$slno.'</td>';
		echo '<td>'.$notice.'</td>';
		echo '<td>'.$pdate.'</td>';
		echo '<td><a href="#">edit</a>&nbsp;|&nbsp;';
		echo '<a href="#">delete</a></td>';
		echo '</tr>';


}
?>


</table>
</form>
</center>
</div>
</div>


