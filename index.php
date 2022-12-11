<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="text-center text-primary">
      <h2>
        <?php 
            if(isset($_GET['msg'])){
            $msg = $_GET['msg'];
            echo $msg;
          }
        ?>
      </h2>
    </div>
    <div class="mt-5 pt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="welcome text-center">
              <h1>Welcome to PHP Tutorial</h1>
              <p>If you are new here please click on the Registration button</p>
              <p>If you have already an account then click to the Login button. And login to the DataBase Table.</p>
            </div>
          </div>
          <div class="col-lg-6 d-flex justify-content-end"><a href="registration.php" class="btn btn-success">Registration Here</a></div>
          <div class="col-lg-6"><a href="login.php" class="btn btn-primary">Log in Here</a></div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
