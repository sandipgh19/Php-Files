<?php
  
    $file_path = "uploads/";
    $title = $_POST['title'];
	$category = $_POST['category'];
	$description = $_POST['description'];
    
    $myobj -> $title;
    $myobj -> $description;
    $myobj -> $category;

    $file_path = $file_path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path) ){
        echo "success";

        $sql = "INSERT INTO zersey_upload_files ('title','description','category','url') VALUES ('$title','$description','$category','$temp_name')";

	if(mysqli_query($con,$sql)) {
		echo "Successfully Uploaded";
        echo json_encode($myobj);
	}
    } else{
        echo "fail to upload";
    }
?>