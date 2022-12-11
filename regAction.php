<?php 

	$conn = mysqli_connect('localhost','root','','tutorialdb');

	if (!$conn) {
		die('Connection Failed: '.mysqli_connect_error());
	}

	if (isset($_POST['submit'])) {
		$fname = $_POST['fname'];
		$lname= $_POST['lname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$imgname = $_FILES['image']['name'];
		$tmpname = $_FILES['image']['tmp_name'];
		$uploc = 'image/'. $imgname;

		$sql = "INSERT INTO userinfo(fName,lName,email,password,image) VALUES('$fname','$lname','$email','$password','$imgname')";
		if (mysqli_query($conn,$sql)) {
			move_uploaded_file($tmpname, $uploc);
			header('location: login.php?message="Registration Successfully');
		}else{
			echo "Error";
			header('location: registratin.php');
		}
		
		mysqli_close($conn);

	}
	
?>