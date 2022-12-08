
<?php

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$dob = $_POST['dob'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$country = $_POST['country'];
	$address = $_POST['address'];
	$zip = $_POST['zip'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];

	// Database connection
	$conn = new mysqli('localhost','root','','Goldenlions');
	if($conn->connect_error){
		die("Connection Failed : ". $conn->connect_error);
	}	
	else {
		$stmt = $conn->prepare("insert into Registration_details(firstName, lastName, dob, phone, email, country,
         address, zip, username, password, confirmPassword) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssisssisss", $firstName, $lastName, $dob, $phone, $email, $country, $address, $zip,$username, $password, $confirmPassword);
		$stmt->execute();
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Registration Successful');
			window.location.href='Login.html';
		</script>");
		$stmt->close();
		$conn->close();
	}
?>
