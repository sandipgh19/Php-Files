<?php

	$id = $_POST['id'];
	$name = $_POST['name'];

	require_once('dbConnect.php');
	
	if($id!= null && $name!= null) {

		$sql = "INSERT INTO `zersay_like` (`id`, `name`) VALUES ('$id', '$name')";
		//$sql = "SELECT count(*) as total from zersay_like"

		if(mysqli_query($con,$sql)) {

			echo "Success";
		} else{

			echo "Fail"
		}
	} else {

		echo "Please fill all the Parts";
	}
	
	mysqli_close($con);
?>