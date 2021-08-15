<?php

	$eventname = $_POST['eventname'];

	$eventdate = $_POST['eventdate'];

	

	$eventthem = $_POST['eventthem'];

	$eventadd = $_POST['eventadd'];

	$eventcity = $_POST['eventcity'];



	// Database connection

	$conn = new mysqli('localhost','root','','project');

	if($conn->connect_error){

		echo "$conn->connect_error";

		die("Connection Failed : ". $conn->connect_error);

	} else {

		$stmt = $conn->prepare("insert into eventform1(eventname, eventdate, eventthem, eventadd, eventcity) values(?, ?, ?, ?, ?)");

		$stmt->bind_param("sisss", $eventname, $eventdate, $eventthem, $eventadd, $eventcity);

		$execval = $stmt->execute();

		echo $execval;


		echo "Submit successfully...";

		$stmt->close();

		$conn->close();

	}

?>
