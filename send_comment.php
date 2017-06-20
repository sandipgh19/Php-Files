<?php

	$id = $_POST['id'];
	$name = $_POST['name'];
	$comment = $_POST['comment'];

	require_once('dbConnect.php');
	
	if($id!= null && $name!= null && $comment!= null) {

		$sql = "INSERT INTO `zersay_comment` (`id`, `name`, `comment`) VALUES ('$id', '$name', '$comment')";

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