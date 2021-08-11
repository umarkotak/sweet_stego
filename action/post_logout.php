<?php include "config.php" ?>
<?php
try {
  unset($_SESSION['role']);
  unset($_SESSION['username']);
  unset($_SESSION['userdata']);

  $_SESSION['green-notice'] = "Logout berhasil";
  echo "<script>location='$HOST_NAME/index.php'</script>";
} catch (Exception $e) {

  $_SESSION['red-notice'] = "Terjadi kesalahan " . $e->getMessage();
  echo "<script>location='$HOST_NAME/index.php'</script>";
}
?>