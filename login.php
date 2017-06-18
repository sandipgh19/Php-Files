<?php

	$email = $_POST['email'];
 	$password = $_POST['password'];

	require_once('dbConnect.php');
	$sql = "SELECT * FROM zersay_register WHERE email= '$email' AND password = '$password'";
 	//require_once('dbConnect.php');

 	$result= mysqli_query($con,$sql);

 	$check = mysqli_fetch_array($result);

 	$result = array();
 	
 	if(isset($check)) {

			array_push($result,array(
                "error"=>"false",
                "message"=>"Success",
				"name"=>$check['name']
			)
	     );
		} else{

			array_push($result,array(
           
                "error"=>"true",
                "message"=>"You are Not Registerd"
			)
		 );
		}


	echo json_encode(array("result"=>$result));
	
	mysqli_close($con);
?>