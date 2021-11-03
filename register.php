<?php

require 'functions.php';
if (isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}

if (isset($_POST['register'])) {
  if (register($_POST) > 0) {
    echo "<script>
            alert('User succcessfully added <3');
          </script>";
    // header("Location: login.php");
  } else {
    echo mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>Register Page</title>
  <style>
    body {
      background-color: #9edb79;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="card card-body mx-auto" style="width: 20rem; margin-top: 17rem; border: 2px solid black; border-radius: 10px;">
      <div class="row justify-content-center">
        <div class>
          <h1 class="text-center">Register</h1>
          <form action="" method="post">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" id="username" class="form-control" name="username">
            </div>

            <div class="mb-3">
              <label for="Password" class="form-label">Password</label>
              <input type="password" id="Password" class="form-control" name="password">
            </div>

            <div class="mb-3">
              <label for="confirm-password" class="form-label">Confirm Password</label>
              <input type="password" id="confirm-password" class="form-control" name="confirm-password">
            </div>

            <p>Sudah nganu? login <a href="login.php">disini</a></p>
            <button type="submit" class="btn btn-primary" name="register">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>