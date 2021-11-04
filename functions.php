<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "pweb_case_1");

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, "$query");
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function register($data)
{
  global $conn;
  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $confirm_password = mysqli_real_escape_string($conn, $data["confirm-password"]);

  $result = mysqli_query($conn, "SELECT username from users WHERE username = '$username';");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('Username already registered');
          </script>";
    return false;
  }
  if ($password !== $confirm_password) {
    echo "<script>
            alert('Password not matched');
          </script>";
    return false;
  }
  $password = password_hash($password, PASSWORD_DEFAULT);
  mysqli_query($conn, "INSERT INTO users VALUES (NULL, '$username', '$password')");
  return mysqli_affected_rows($conn);
}

function login($data)
{
  global $conn;
  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);

  $result = mysqli_query($conn, "SELECT * from users WHERE username = '$username';");
  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
      $_SESSION["login"] = true;
      header("Location: index.php");
      exit;
    }
  }
  return true;
}

function logout()
{
  $_SESSION = [];
  session_unset();
  session_destroy();

  header("Location: login.php");
  exit;
}
