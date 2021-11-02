<?php
require 'functions.php';

if (isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}

$error = false;
if (isset($_POST['login'])) {
  if (login($_POST)) {
    $error = true;
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>Login Page</title>
</head>
<style>
  body {
    background-color: #9edb79;
  }
</style>

<body>
  <div class="container">
    <div class="card card-body mx-auto" style="width: 20rem; margin-top: 17rem; border: 2px solid black; border-radius: 10px;">
      <div class="row justify-content-center">
        <div class>
          <h1 class="text-center">Login</h1>
          <?php if ($error) : ?>
            <p class="text-center" style="color: red; font-size: 13px;">Username and/or password is wrong. Try again!</p>
          <?php endif; ?>
          <form action="login.php" method="post">
            <div class="mb-3">
              <label for="inputUsername" class="form-label">Username</label>
              <input type="text" id="inputUsername" class="form-control" aria-describedby="emailHelp" name="username">
            </div>

            <div class="mb-3">
              <label for="inputPassword" class="form-label">Password</label>
              <input type="password" id="inputPassword" class="form-control" name="password">
            </div>

            <p>Belum nganu? register <a href="register.php">disini</a></p>
            <button type="submit" class="btn btn-primary" name="login">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>