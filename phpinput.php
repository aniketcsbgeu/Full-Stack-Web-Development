<?php
 include 'config.php';
?>
<?php 
if (isset($_POST['btn'])){
	echo "dear, ".$_POST["username"]." your details are"."<br> ";
echo $_POST["id"];
echo $_POST["username"];
echo $_POST["age"];
echo $_POST["contact"];
echo $_POST["email"];
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
			ID:<input name="id",type="text" placeholder="enter id"><br>
			name:<input type="text" name="username"><br>
			age:<input type="text" nmae="age" placeholder="enter age"><br>
			contact:<input type="text" name="contact" placeholder="enter age"><br>
			email:<input type="text" name="email" placeholder="enter email"><br>
			<input type="submit" name='btn'>
		</form>
	</body>
</html>