<?php


	$firstname = $_POST['firstname'];
                  
	$email = $_POST['email'];

                  $lastname = $_POST['lastname'];

	$phonenumber = $_POST['phonenumber'];

	$message = $_POST['message']; 




	// Database connection

	$conn = new mysqli('localhost','root','','project');

	if($conn->connect_error){

		echo "$conn->connect_error";

		die("Connection Failed : ". $conn->connect_error);

	} else {

		$stmt = $conn->prepare("insert into contact (firstname, email, lastname, phonenumber, message) values(?, ?, ?, ?, ?)");

		$stmt->bind_param("sssis", $firstname, $email, $lastname, $phonenumber, $message);

		$execval = $stmt->execute();

		echo $execval;


		echo "Submit successfully...";

		$stmt->close();

		$conn->close();

	}

?>
