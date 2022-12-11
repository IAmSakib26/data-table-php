<?php
  session_start();
  if(!isset($_SESSION['email'])){
    header('location: index.php');
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DataBase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body >
    <div class="dashboard">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="text-center text-primary my-5">DataBase Table</h1>
          </div>
          <div class="col-lg-12 text-end my-3">
            <form action="logoutAction.php" method="post">
              <input type="submit" class="btn btn-secondary text-primary" name="logout" value="Log out">
            </form>
          </div>
          <div class="col-lg-12">
            <table class="table table-striped table-hover bg-light rounded">
              <tr class="bg-info text-light text-justify">
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Image</th>
                <th colspan="2" class="text-center">Action</th>
              </tr>
              <?php 
              $conn = mysqli_connect('localhost','root','','tutorialdb');
              if(!$conn){
                die('Not connected'.mysqli_connect_error());
              }
              $fetchData = 'SELECT * FROM userinfo';
              $query = mysqli_query($conn,$fetchData);
              $numRows = mysqli_num_rows($query);
              
                if($numRows > 0){
                  $id = 0;
                  while($table = mysqli_fetch_assoc($query)){
                    $id=$id+1;
                    echo '<tr>
                    <td>'.$id.'</td>
                    <td>'.$table['fname'].'</td>
                    <td>'.$table['lname'].'</td>
                    <td>'.$table['email'].'</td>
                    <td>'.$table['password'].'</td>
                    <td>'.'<img src="image/'.$table["image"].'" style="width:100px; height: 100px;" class="img-thumbnail">'.'</td>
                    <td><a class="btn btn-sm btn-primary" href="update.php?id='.$table['id'].'">Update</a></td>
                    <td><a class="btn btn-sm btn-outline-danger" href="deleteAction.php?id='.$table['id'].'">Delete</a></td>
                    </tr>';
                  }
                  if(isset($_GET['message'])){
                    $msg = $_GET['message'];
                    echo "<script>alert($msg)</script>";
                  }
                }
              ?>
            </table>
            <div class="col-lg-12">
              <a href="registration.php" class="btn btn-primary mb-5">< Go to Registration Page</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
  </body>
</html>