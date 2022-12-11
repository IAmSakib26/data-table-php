<?php 
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div class="welcomImg text-center">
      <div class="container">
        <h1 class="text-center">Update your Information</h1>
      </div>
    </div>
    <div class="login ">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
          <?php 
            $conn = mysqli_connect('localhost','root','','tutorialdb');
              if (!$conn) {
                die('Connection Failed: '.mysqli_connect_error());
              }
              
              if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "SELECT * FROM userinfo WHERE id = '$id'";
                $result = mysqli_query($conn,$sql);
                $res = mysqli_fetch_assoc($result);
                $fname = $res['fname'];
                $lname = $res['lname'];
                $upemail = $res['email'];
                $uppassword = $res['password'];
                $upimg = $res['image'];
                }
                else{
                  header('location: dashboard.php');
                }
              
              
            mysqli_close($conn);
          ?>
            <form class="updateForm bg-secondary text-light" action="udpateAction.php" method="post" enctype="multipart/form-data">
              <label for="" class="form-label">First Name *</label>
              <input type="text" name="newfname" placeholder="First Name" value="<?php echo $fname;?>" class="form-control" required>
              <label for="" class="form-label">Last Name *</label>
              <input type="text" name="newlname" placeholder="Last Name" value="<?php echo $lname;?>" class="form-control" required>
              <label for="" class="form-label">Email *</label><br>
              <input type="email" name="newemail" placeholder="Email" value="<?php echo $upemail;?>" class="form-control" required>
              <label for="" class="form-label">Password *</label><br>
              <input type="password" name="newpassword" placeholder="Password" value="<?php echo $uppassword;?>" class="form-control" required><br>
              <label for="" class="form-label">Seltect Image *</label>
              <input type="file" name="newimage" class="form-control" value="<?php echo $upimg;?>" ><br><br>
              <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
              <input type="submit" name="update" class="btn" value="Update">
            </form>
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>