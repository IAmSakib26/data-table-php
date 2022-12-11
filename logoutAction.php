<?php 
    if(isset($_POST['logout'])){
        session_start();
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        session_destroy();
        header('location: index.php?msg=Log out Successfully');
    }
?>