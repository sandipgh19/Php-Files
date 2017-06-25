<?php

	$id = $_POST['id'];
	//$name = $_POST['name'];

	require_once('dbConnect.php');

	//$result = mysql_query("SELECT COUNT(*) as count FROM zersay_like WHERE id = '$id'");

	$sql = "SELECT COUNT(*) as count FROM zersay_like WHERE id = '$id'";
	$result= mysqli_query($con,$sql);

	if(mysqli_query($con,$sql)) {

		$result = mysql_fetch_array($result);
 		$response["success"] = 1;
 		$response["result"] = $result["count"];
 		echo json_encode($response);


	}

	
	
	/*if($id!= null && $name!= null) {

		$sql = "INSERT INTO `zersay_like` (`id`, `name`) VALUES ('$id', '$name')";
		//$sql = "SELECT count(*) as total from zersay_like"

		if(mysqli_query($con,$sql)) {

			echo "Success";
		} else{

			echo "Fail"
		}
	} else {

		echo "Please fill all the Parts";
	}*/
	
	mysqli_close($con);
?>