<?php 
echo 'welcome'.' '. $_POST['username'];
  ?>

<html>
	<head>
		<title>input form</title>
	</head>
	<body>
		<form action="" method="post">
			name:<input type="text" name="username"><br>
			<input type="submit" name='btn'>
		</form>
	</body>
</html>