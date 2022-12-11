<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div class="welcomImg text-center">
      <div class="container-fluid">
        <img src="https://img.freepik.com/free-vector/welcome-word-flat-cartoon-people-characters_81522-4207.jpg?w=740&t=st=1669886610~exp=1669887210~hmac=f2e93f6dc43a2b0bc34a15a2d2bcaa4e84e897a2588c26dd18a92a5137fab8bc" alt="Welcom registration" title="Welcom registration" class="img-fluid">
      </div>
    </div>
    <div class="login ">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <form class="regForm bg-secondary text-light" action="regAction.php" method="post" enctype="multipart/form-data">
              <label for="" class="form-label">First Name *</label>
              <input type="text" name="fname" placeholder="First Name" class="form-control" required>
              <label for="" class="form-label">Last Name *</label>
              <input type="text" name="lname" placeholder="Last Name" class="form-control" required>
              <label for="" class="form-label">Email *</label><br>
              <input type="email" name="email" placeholder="Email" class="form-control">
              <label for="" class="form-label">Password *</label><br>
              <input type="password" name="password" placeholder="Password" class="form-control" required><br>
              <label for="" class="form-label">Seltect Image *</label>
              <input type="file" name="image" class="form-control" required><br><br>
              <input type="submit" name="submit" class="btn btn-outline-dark" value="Registration">
            </form>
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
