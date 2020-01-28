<?php
include('config.php');
?>

<?php
$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn, $sql);


if($result->num_rows > 0){
	while($data = $result->fetch_assoc()){
	echo '<br><br>'.'ID -'. $data['id'].'<br>';
	echo 'NAME -'.$data['name'].'<br>';
	echo 'AGE -'.$data['age'].'<br>';
	echo 'CONTACT -'.$data['contact'].'<br>';
	echo 'EMAIL -'.$data['email'].'<br><br>';
}
}
?>