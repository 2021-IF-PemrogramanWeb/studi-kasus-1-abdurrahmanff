<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>Login</title>
</head>
<style>
  body {
    background-color: #9edb79;
  }
</style>

<body>
  <div class="container">
    <div class="card card-body mx-auto border-primary" style="width: 20rem; margin-top: 17rem">
      <div class="row justify-content-center">
        <div class>
          <h1 class="text-center">Login</h1>
          <form action="login.php" method="post">
            <div class="mb-3">
              <label for="inputEmail" class="form-label">Email address</label>
              <input type="email" id="inputEmail" class="form-control" aria-describedby="emailHelp" name="email">
            </div>

            <div class="mb-3">
              <label for="inputPassword" class="form-label">Password</label>
              <input type="password" id="inputPassword" class="form-control" name="password">
            </div>

            <p>Belum nganu? register <a href="register.php">disini</a></p>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>