<?php

    $conn = mysqli_connect('localhost','root','','tutorialdb');
    if (!$conn) {
      die('Connection Failed: '.mysqli_connect_error());
    }
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM userinfo WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header('location: dashboard.php?message="deleteed Successfully"');
        }
    }
    mysqli_close($conn);
?>