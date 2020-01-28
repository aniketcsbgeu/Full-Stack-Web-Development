<?php
 include 'config.php';
?>
<?php 
if (isset($_POST['btn'])){
echo "Dear, ".$_POST["username"]." you are welcome.".'<br>';

$username=$_POST["username"];
$age= $_POST["age"];
$contact=$_POST["contact"];
$email=$_POST['email'];

$sql="INSERT INTO users(name,age,contact,email) VALUES ('$username','$age','$contact','$email')";
mysqli_query($conn,$sql);
}
else{
      echo "welcome guest"; 
}


?>
<html>
	<head>
		<title>input form</title>
	</head>
	<body>
		<form action="phpinput.php" method="post">
		   
			name:<input type="text" name="username" placeholder="enter name"><br>
			age:<input type="text" name="age" placeholder="enter age"><br>
			contact:<input type="text" name="contact" placeholder="enter age"><br>
			email:<input type="text" name="email" placeholder="enter email"><br>
			<input type="submit" name='btn'>
		</form>
	</body>
</html>
