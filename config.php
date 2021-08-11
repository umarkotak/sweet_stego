<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
?>

<?php
try {
  $host     = 'localhost';
  $dbname   = 'certitect';
  $user     = 'root';
  $password = '';

  // $dbname   = 'aioe2328_sertifikat';
  // $user     = 'aioe2328_usersertifikat';
  // $password = 'sertifikat1234';

  $conn = new PDO("mysql:host=$host;dbname=$dbname","$user","$password");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {

  echo $e->getMessage();
  $_SESSION['notice'] = "There is some trouble in your connection" . $e->getMessage();
  die();
}
?>

<?php
  // $HOST_NAME = "";
  // $HOST_NAME = "/aplikasi_skripsi";
  $HOST_NAME = "/sweet_stego";
?>
