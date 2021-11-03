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
// var_dump($datas[0]["Nama"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>Data Grafik</title>
</head>

<body>
  <div id="nav-placeholder">

  </div>
  <script>
    $(function() {
      $("#nav-placeholder").load("navbar.html");
    });
  </script>
  <div class="mt-3 justify-content-center d-grid gap-2">
    <form id="form-button">

    </form>
  </div>
  <!-- <h1><?php echo $datas[0]["Nama"] ?></h1> -->
  <div class="container mt-4" id="chart-container">
    <canvas id="my-chart"></canvas>
  </div>
  <script>
    const formButton = document.getElementById("form-button");
    async function fetchButtons() {
      const response = await fetch("/datas.php");
      const datas = await response.json();
      // console.log(datas);
      for (let i = 0; i < datas.length; i++) {
        const button = document.createElement("button");
        button.id = `button${datas[i].id}`;
        button.type = "button";
        button.classList.add("btn");
        button.classList.add("btn-outline-primary");
        button.classList.add("me-1");
        button.classList.add("ms-1");
        button.innerText = datas[i].nama;
        button.dataset["id"] = datas[i].id;
        button.onclick = () => {
          clickHandler(datas[i].id);
        }
        formButton.appendChild(button);
      }
    }
    fetchButtons();
  </script>

  <script>
    let activeButton = null;
    async function clickHandler(id) {
      const container = document.getElementById("chart-container");
      let chart = document.getElementById("my-chart");
      if (activeButton) {
        activeButton.classList.remove("active");
      }
      const button = document.getElementById(`button${id}`);
      button.classList.add("active");
      activeButton = button;
      if (chart) {
        chart.remove();
      }
      chart = document.createElement("canvas");
      chart.id = "my-chart";
      container.appendChild(chart);
      // console.log(id);
      const response = await fetch(`/datas.php?id=${id}`);
      const data = await response.json();
      // console.log(data);

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
      const chartDatas = {
        labels: labels,
        datasets: [{
          label: data.Nama,
          data: [
            data.Sem_1, data.Sem_2,
            data.Sem_3, data.Sem_4,
            data.Sem_5, data.Sem_6,
            data.Sem_7, data.Sem_8
          ],
          fill: false,
          borderColor: 'rgb(75, 192, 192)',
          tension: 0.1
        }]
      };
      const config = {
        type: 'line',
        data: chartDatas,
        options: {
          scales: {
            y: {
              suggestedMin: 0,
              suggestedMax: 4
            }
          }
        }
      };
      const myChart = new Chart(
        chart,
        config
      );
    }
  </script>

</body>

</html>