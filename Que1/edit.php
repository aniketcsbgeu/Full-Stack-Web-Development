<?php
require_once('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script type="text/javascript">
		function alertdelete()
		 {
		 	
			  var txt;
			  if (confirm("Do you want to delete?")) { 
			    return true;
			  } else {
			    window.location.reload(false);
			    return false;
			  }
			  
		}
		function alertupdate()
		 {
		 	
			  var txt;
			  if (confirm("Do you want to update?")) { 
			    return true;
			  } else {
			    window.location.reload(false);
			    return false;
			  }
			  
		}
	</script>
</head>
<body>
	<br><br><br>
	<div style="margin-right:10%; margin-left:10%;">
	<table class="table table-condensed table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Enrolment no.</th>
				<th>Name</th>
				<th>Age</th>
				<th>Course</th>
				<th>Branch</th>
				<th>Contact</th>
				<th>email</th>
				<th>Delete</th>
				<th>Update</th>
			</tr></thead>
<?php
$sql="SELECT * FROM details";
$result=mysqli_query($con,$sql);
if($result)
{
	$sr=0;
	while($row=mysqli_fetch_array($result))
	{
		$id=$row['id'];
		$enrolment=$row['enrollment'];
		$name=$row['name'];
		$age=$row['age'];
		$course=$row['course'];
		$branch=$row['branch'];
		$contact=$row['contact'];
		$email=$row['email'];
	?>
	<tbody>
		<tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $enrolment;?></td>
			<td><?php echo $name; ?></td>
			<td><?php echo $age; ?></td>
			<td><?php echo $course; ?></td>
			<td><?php echo $branch; ?></td>
			<td><?php echo $contact; ?></td>
			<td><?php echo $email; ?></td>
			<td><a onclick="return alertdelete()" href="delete.php?id=<?php echo $id;?>">Delete</a></td>
			<td><a onclick="return alertupdate()" href="update.php?id=<?php echo $id;?>">Update</a></td>
			</tr>
		</tbody>
		<?php $sr++;
	}
}
?>
</table>
</div>
</body>
</html>