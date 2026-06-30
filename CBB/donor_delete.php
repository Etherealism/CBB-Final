<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Donor Delete</title>
	<?php
	$con = mysqli_connect('localhost','eth','gunzs12345','blood_db');
	if (isset($_GET['deleteid']))
	{
		$id = $_GET['deleteid'];
		$sql = "UPDATE donors SET status = 2 WHERE id = $id";
		$result = mysqli_query($con,$sql);
		if($result)
		{
			echo "<script type='text/javascript'>alert('Deleted Successfully');
			window.location='donor_display.php';
			</script>";
		}
		else
		{
			echo "<script type='text/javascript'>alert('Failed to Delete');
			window.location='admin_donor.php';
			</script>";
		}
	}
	?>
</head>
<body>
</body>
</html>