<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div class="login">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 text-center">
            <img src="https://img.freepik.com/free-vector/mobile-login-concept-illustration_114360-83.jpg?w=2000" alt="welcome" class="img-fluid loginImg" title="welcome">
          </div>
          <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <form action="logAction.php" method="post">
              <label class="form-label">Email</label>
              <input type="email" name="logemail" class="form-control"><br>
              <label class="form-label">Password</label>
              <input type="password" name="logpassword" class="form-control"><br>
              <input type="submit" name="logSubmit" class="btn btn-primary" value="Login">
            </form>
          </div>
          <div class="col-lg-12 text-center">
            <div class="text-center text-danger">
              <?php 
                if(isset($_GET['error'])){
                 $error = $_GET['error'];
                  echo $error;
                }
              ?>
            </div>
            <a href="index.php" class="btn btn-primary mt-5">< Go Back to Home page</a>
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
