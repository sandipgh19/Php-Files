<?php

	$id = $_POST['id'];

	require_once('dbConnect.php');
	$sql = "SELECT * FROM zersay_comment where id=$id";
	$r = mysqli_query($con,$sql);

	$result = array(); 
	
	while($row = mysqli_fetch_array($r)){
		array_push($result,array(
				'title'=>$row['title'],
                'name'=>$row['name'],
                'comment'=>$row['comment']
		));
	}
	
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>