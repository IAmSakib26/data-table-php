<?php
    $conn = mysqli_connect('localhost','root','','tutorialdb');
    if (!$conn) {
      die('Connection Failed: '.mysqli_connect_error());
    }
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $newfname = $_POST['newfname'];
        $newlname = $_POST['newlname'];
        $newemail = $_POST['newemail'];
        $newpassword = $_POST['newpassword'];
        $newimage = $_FILES['newimage']['name'];
		$newtmpname = $_FILES['newimage']['tmp_name'];
		$newuploc = 'image/'. $newimage;

        if($newtmpname != ''){
            move_uploaded_file($newtmpname,$newuploc);
            echo 'update successfully';
        }else{
            echo 'update failed';
        }
        $newsql = "UPDATE `userinfo` SET `fname` = '$newfname',`lname` = '$newlname',`email` = '$newemail',`password`='$newpassword',`image`='$newimage' WHERE `userinfo`.`id` = $id";
        $newquery = mysqli_query($conn,$newsql);
        if($newquery){
            header('location: dashboard.php?message="Updateed Successfully"');
        }
    }
?>