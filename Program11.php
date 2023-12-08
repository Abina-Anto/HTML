<html lang="en">
<head>
	<style>
	tr,td{
		padding:1em;
	}
	</style>
</head>
<body>
<?php
	$con=Mysqli_Connect("localhost","root","","Programs");
	if(!$con){
		echo "Connection error!";
	}
	else{
		$query="select * from student";
		$values=mysqli_query($con,$query);
		echo '<table border="1" style="margin-left:auto;margin-right:auto;margin-top:3cm;border-collapse:collapse;">
		<th>Name</th>
		<th>Email</th>
		<th>Mobile Number</th>
		<th>Age</th>';
		if(mysqli_num_rows($values)){
			while($row=mysqli_fetch_assoc($values)){
				echo '<tr>';
					echo '<td>';
						echo $row["Name"];
					echo '</td>';
					echo '<td>';
						echo $row["Email"];
					echo '</td>';
					echo '<td>';
						echo $row["Mobile Number"];
					echo '</td>';
					echo '<td>';
						echo $row["Age"];
					echo '</td>';
				echo '</tr>';
		}
	}
	else{
		echo "error".$query.mysqli_error($con);
	}
}
?>
</body>
</html>
