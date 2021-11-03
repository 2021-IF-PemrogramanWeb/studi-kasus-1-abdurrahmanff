<?php

require 'functions.php';
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
if (isset($_POST["logout"])) {
  logout();
}
$datas = query("SELECT * FROM nilai_mahasiswa;");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>Data Tabel</title>
</head>

<body>
  <div id="nav-placeholder">

  </div>
  <script>
    $(function() {
      $("#nav-placeholder").load("navbar.html");
    });
  </script>
  <div class="container mt-3">
    <h1 class="text-center mb-3">Data Tabel Nilai Mahasiswa</h1>
    <table class="table table-striped">
      <tr>
        <th>No.</th>
        <th>Nama Mahasiswa</th>
        <th>Semester 1</th>
        <th>Semester 2</th>
        <th>Semester 3</th>
        <th>Semester 4</th>
        <th>Semester 5</th>
        <th>Semester 6</th>
        <th>Semester 7</th>
        <th>Semester 8</th>
      </tr>

      <?php
      $i = 1;
      foreach ($datas as $row) :
      ?>

        <tr>
          <td><?php echo $i ?></td>
          <td><?php echo $row["Nama"] ?></td>
          <td><?php echo $row["Sem_1"] ?></td>
          <td><?php echo $row["Sem_2"] ?></td>
          <td><?php echo $row["Sem_3"] ?></td>
          <td><?php echo $row["Sem_4"] ?></td>
          <td><?php echo $row["Sem_5"] ?></td>
          <td><?php echo $row["Sem_6"] ?></td>
          <td><?php echo $row["Sem_7"] ?></td>
          <td><?php echo $row["Sem_8"] ?></td>
        </tr>

      <?php
        $i++;
      endforeach;
      ?>
    </table>
  </div>
</body>

</html>