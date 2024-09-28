<?php
date_default_timezone_set("Asia/Kolkata");
$con = mysqli_connect('localhost','patient1_sing','smvM2-Teh5C@','patient1_sing');
session_start();
$user=$_SESSION["user"];
if($user==""){
header("location:login.php");
}
$sql = "SELECT * FROM akshi ORDER BY createdat DESC";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="10" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/canvasjs.min.js"></script>
<title> Solution For Paralytic Patient Communication </title>
</head>
<table style="width:100%" border="1">
<tr>
<td colspan="5" valign="middle" width="100%" align="center">
<h3> Solution For Paralytic Patient Communication  </h3></td>
</tr>
</table>
</html>

<?php
$con = mysqli_connect('localhost','patient1_sing','smvM2-Teh5C@','patient1_sing');
$sth = mysqli_query($con, "SELECT * FROM akshi ORDER BY createdat DESC ");
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<a class="btn btn-primary btn-block" href="index.php">MAIN SCREEN</a>
<br>

<a class="btn btn-primary btn-block" href="logout.php">Logout</a>
</td>
</tr>
</table>

<table width="100%" border="1">

	<tr>

	<th><h3>TEMP</h3></th>

	<th><h3>ECG</h3></th>
	
	<th><h3>FALL DETECT</h3></th>
	
	<th><h3>Date  / TIME </h3></th>


	</tr>


<?php while($row = mysqli_fetch_assoc($sth))
	{
?>
<tr>
<th><?php echo $row['temp']; ?></th>
<th><?php echo $row['ecg']; ?></th>
<th><?php echo $row['fal']; ?></th>
<th><?php echo $row['createdat']; ?></th>

</tr>
<?php 
} 
?>


</table>
	
