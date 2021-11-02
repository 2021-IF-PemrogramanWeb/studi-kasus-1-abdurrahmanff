<?php
$conn = mysqli_connect("localhost", "root", "", "pweb_case_1");

function query()
{
  global $conn;
  $result = mysqli_query($conn, "SELECT * FROM nilai_mahasiswa;");
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
