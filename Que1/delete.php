<?php
require_once('connection.php');
if($con)
	$id =$_GET['id'];
	$sql="DELETE from details where id='$id'";
	$res=mysqli_query($con,$sql);
	if($res)
	{
		header('Location:edit.php');
	}
	else
		echo "Not deleted.";
?>