<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Approval and Delete</title>
	<?php
	$con = mysqli_connect('localhost','eth','gunzs12345','blood_db');
	if (isset($_GET['deleteid']))
	{
		$id = $_GET['deleteid'];
		$sql = "UPDATE request_info SET STATUS = 2 WHERE id = $id";
		$result = mysqli_query($con,$sql);
		if($result)
		{
			echo "<script type='text/javascript'>alert('Deleted Successfully');
			window.location='admin_request.php';
			</script>";
		}
		else
		{
			echo "<script type='text/javascript'>alert('Failed to Delete');
			window.location='admin_request.php';
			</script>";
		}
	}
	elseif (isset($_GET['approveid']))
	{
		$id = $_GET['approveid'];
		$que = "SELECT * FROM request_info WHERE id = $id";
		$get = mysqli_query($con,$que);
		$row = mysqli_fetch_assoc($get);
		$btype = $row['blood_type'];
		$bpacks = $row['blood_packs'];
		$get_blood = "SELECT `blood_packs` FROM blood_inventory WHERE blood_type = '$btype'";
		$que1 = mysqli_query($con,$get_blood);
		$blood_db = mysqli_fetch_assoc($que1);
		$invepacks = $blood_db['blood_packs'];
		if ($invepacks > $bpacks)
		{
			$deducpacks = $invepacks - $bpacks;
			$sql2 = "UPDATE blood_inventory SET blood_packs = '$deducpacks' WHERE `blood_type` = '$btype'";
			$result1 = mysqli_query($con,$sql2);
			$sql = "UPDATE request_info SET STATUS = 1 WHERE id = $id";
			$result = mysqli_query($con,$sql);
			if($result)
			{
				echo "<script type='text/javascript'>alert('Approved Successfully');
				window.location='admin_request.php';
				</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert('Failed to Delete');
				window.location='admin_request.php';
				</script>";
			}
		}
		else
		{
			echo "<script type='text/javascript'>alert('Insufficient Blood Packs');
				window.location='admin_request.php';
				</script>";
		}
	}
	?>
</head>
<body>
</body>
</html>