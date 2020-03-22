<?php
require_once('connection.php');
if(isset($_POST['submit']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$course = $_POST['course'];
	$branch = $_POST['branch'];
	$enrolment = $_POST['enroll'];
	echo $id;
	$sql = "UPDATE details set name = '$name' , age = '$age' ,email = '$email' ,contact = '$contact' , course = '$course' , branch= '$branch',enrollment = '$enrolment'   where id = '$id'";
	$res=mysqli_query($con, $sql);
	if($res)
	{
		echo "yes";
		header('Location:edit.php');
	}
	else
		{echo "no";header('Location : edit.php');}
}
else
{
	$id = $_GET['id'];
	$sql = "SELECT * from details where id='$id'";
	$res=mysqli_query($con, $sql);
	$row = mysqli_fetch_array($res);
	$name = $row['name'];
	$age = $row['age'];
	$email = $row['email'];
	$contact = $row['contact'];
	$course = $row['course'];
	$branch = $row['branch'];
	$enrolment = $row['enrollment'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>update details</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="form-group" style="margin-left:20%; margin-right: 30%; margin-top: 5%; ">
		<h2>Update details</h2>
		<form action="update.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id?>">
			Enter Enrolment number:<br>
			<input type="text" name="enroll" class="form-control" value="<?php echo $enrolment?>"><br>
			Name:<br>
			<input type="text" name="name" class="form-control" value="<?php echo $name?>"><br>
			Age:<br>
			<input type="text" name="age" class="form-control" value="<?php echo $age?>"><br>
			Course:<br>
			<input type="text" name="course" class="form-control" value="<?php echo $course?>"><br>
			Branch:<br>
			<input type="text" name="branch" class="form-control" value="<?php echo $branch?>"><br>
			Contact:<br>
			<input type="text" name="contact" class="form-control" value="<?php echo $contact?>"><br>
			Email:<br>
			<input type="text" name="email" class="form-control" value="<?php echo $email?>"><br>
			<input type="submit" name="submit" class="btn btn-primary">
		</form>
	</div>
</form>
</body>
</html>