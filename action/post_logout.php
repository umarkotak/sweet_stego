POST Logout

<?php ob_start(); ?>
<?php include "config.php" ?>
<?php
try {
  unset($_SESSION['role']);
  unset($_SESSION['username']);
  unset($_SESSION['userdata']);

  $_SESSION['green-notice'] = "Logout berhasil";
  header("location: $HOST_NAME/index.php", true, 301);
} catch (Exception $e) {

  $_SESSION['red-notice'] = "Terjadi kesalahan " . $e->getMessage();
  header("location: $HOST_NAME/index.php", true, 301);
}
?>