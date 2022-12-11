<?php 
	session_start();
	$conn = mysqli_connect('localhost','root','','tutorialdb');

	if (!$conn) {
		die('Connection Failed: '.mysqli_connect_error());
	}

	if (isset($_POST['logSubmit'])) {
		$logemail = $_POST['logemail'];
		$logpassword = $_POST['logpassword'];
		$sql = "SELECT * FROM userinfo WHERE email = '$logemail' AND password = '$logpassword'";
		$query = mysqli_query($conn,$sql);
		$result = mysqli_num_rows($query);
		if ($result >0 ) {
			$fetch = mysqli_fetch_assoc($query);
			$_SESSION['email'] = $fetch['email'];
			$_SESSION['password'] = $fetch['password'];
			header('location: dashboard.php');
			exit();
		}else{
			header('location: login.php?error=Incorrect email of password!');
			exit();
		}
		
		mysqli_close($conn);

	}
	
?>