<?php
require_once('connection.php');
	
	$x = 0;
	if(isset($_POST['submit']))
	{
		$enroll = $_POST['enroll'];
		$sql = "select * from details where enrollment = '$enroll'";
		$re= mysqli_query($con,$sql);
		$num = mysqli_num_rows($re);
		if($num <= 0)
		{
			
			$name = $_POST['name'];
			$age = $_POST['age'];
			$course = $_POST['course'];
			$branch = $_POST['branch'];
			$contact = $_POST['contact'];
			$email = $_POST['email'];
			$sql = "INSERT INTO details(name,age,course,branch,contact,email,enrollment) values('$name','$age','$course','$branch','$contact','$email','$enroll')";
			$res = mysqli_query($con,$sql);
		}
		else
		{	echo "Data aleredy exist.";}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>INPUT DETAILS</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="margin-left: 10%;">
	<h1><i>Student's detail</i></h1><br>
<form action="table.php" method=post class="form-group" style="margin-right: 900px ">
	<h6>Enrolment number:</h6>
	<input type="text" name="enroll" class="form-control">
	<h6>Name:</h6>
	<input type="text" name="name" class="form-control">
	<h6>Age:</h6>
	<input type="text" name="age" class="form-control">
	<h6>Course:</h6>
	<input type="text" name="course" class="form-control">
	<h6>Branch:</h6>
	<input type="text" name="branch" class="form-control">
	<h6>Contact:</h6>
	<input type="text" name="contact" class="form-control">
	<h6>Email:</h6>
	<input type="text" name="email" class="form-control"><br>
	<input type="submit" name="submit" class="btn btn-info">
	<a href="edit.php" style="margin-left: 5%">View Data</a>
</form>
</body>
</html>