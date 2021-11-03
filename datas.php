<?php
require 'functions.php';

if (count($_GET) === 0) {
  $datas = query("SELECT id, nama FROM nilai_mahasiswa;");
  echo json_encode($datas);
} else {
  $id = $_GET["id"];
  $data = query("SELECT * FROM nilai_mahasiswa WHERE id=" . $id . ";");
  echo json_encode($data[0]);
}
