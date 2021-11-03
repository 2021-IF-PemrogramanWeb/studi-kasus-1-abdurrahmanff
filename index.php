<?php

require 'functions.php';
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
}
if (isset($_POST["logout"])) {
  logout();
}
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>Login</title>
</head>

<body>
  <div id="nav-placeholder">

  </div>
  <script>
    $(function() {
      $("#nav-placeholder").load("navbar.html");
    });
  </script>
  <div class="container">
    <div style="margin-top: 200px;">
      <h1 class="text-center pb-4">Video Lucu</h1>
      <div class="position-absolute top-50 start-50 translate-middle">
        <iframe width="560" height="315" st" src="https://www.youtube.com/embed/Z9LlEIDJL08" title="YouTube"></iframe>
      </div>
    </div>
  </div>
  </div>
  </iframe>
</body>

</html>