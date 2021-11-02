<?php
require 'functions.php';
$datas = query();
// var_dump($datas[0]["Nama"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <title>Document</title>
</head>

<body>
  <!-- <h1><?php echo $datas[0]["Nama"] ?></h1> -->
  <div class="container">
    <canvas id="myChart"></canvas>
    <script>
      const labels = [
        'Semester 1',
        'Semester 2',
        'Semester 3',
        'Semester 4',
        'Semester 5',
        'Semester 6',
        'Semester 7',
        'Semester 8'
      ];
      const data = {
        labels: labels,
        datasets: [{
          label: '<?php echo $datas[0]["Nama"] ?>',
          data: [
            <?php echo $datas[0]['Sem_1'] ?>,
            <?php echo $datas[0]['Sem_2'] ?>,
            <?php echo $datas[0]['Sem_3'] ?>,
            <?php echo $datas[0]['Sem_4'] ?>,
            <?php echo $datas[0]['Sem_5'] ?>,
            <?php echo $datas[0]['Sem_6'] ?>,
            <?php echo $datas[0]['Sem_7'] ?>,
            <?php echo $datas[0]['Sem_8'] ?>,
          ],
          fill: true,
          borderColor: 'rgb(75, 192, 192)',
          tension: 0.1
        }]
      };
      const config = {
        type: 'line',
        data: data,
      };

      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
    </script>
  </div>
  <!-- <div>
    <canvas id="myChart"></canvas>
    <script>
      const labels = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
      ];
      const data = {
        labels: labels,
        datasets: [{
          label: 'My First dataset',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: [0, 10, 5, 2, 20, 30, 45],
        }]
      };
      const config = {
        type: 'line',
        data: data,
        options: {}
      };
      // === include 'setup' then 'config' above ===

      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
    </script>

  </div> -->
</body>

</html>