<?php

	$email = $_POST['email'];
 	$password = $_POST['password'];
 	$name = $_POST['name'];

	if($name == '' || $email == '' || $password == ''){
        $response['error']=true;
        $response['message']='Fill all the Value';
 }else{
 require_once('dbConnect.php');
 $sql = "SELECT * FROM zersay_register WHERE email='$email'";
 
 $check = mysqli_fetch_array(mysqli_query($con,$sql));
 
 if(isset($check)){
        $response['error']=true;
        $response['message']='Email Already Register';
 }
 else{ 
 $sql = "INSERT INTO zersay_register (name, email, password) VALUES('$name', '$email', '$password')";

 if(mysqli_query($con,$sql)){
        $response['error']=false;
        $response['message']='Success';
 }else{
        $response['error']=true;
        $response['message']='Error';
 }
 }
 echo json_encode($response);
	
	mysqli_close($con);
}
?>