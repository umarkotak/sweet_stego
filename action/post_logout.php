POST Logout

<?php include "config.php" ?>
<?php
try {
  unset($_SESSION['role']);
  unset($_SESSION['username']);
  unset($_SESSION['userdata']);

  $_SESSION['green-notice'] = "Logout berhasil";
  header("location: /index.php");
  // header("location: $HOST_NAME/index.php");
} catch (Exception $e) {

  $_SESSION['red-notice'] = "Terjadi kesalahan " . $e->getMessage();
  header("location: /index.php");
  // header("location: $HOST_NAME/index.php");
}
?>