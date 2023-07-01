<?php
 $Name = $_POST['Name'];
 $Age = $_POST['Age'];
 $Weight = $_POST['Weight'];
 $Email = $_POST['Email'];
 $Report= $_POST['Report'];

 $conn = new mysqli('localhost','root','','form');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into `form`(Name, Age, Weight, Email, Report) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("siisb", $Name, $Age, $Weight, $Email, $Report);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>