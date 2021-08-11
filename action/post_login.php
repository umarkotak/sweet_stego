<?php include "config.php" ?>
<?php
if (isset($_POST['submit'])) {
  try {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = $conn->prepare('SELECT * FROM users WHERE username=:username AND password=:password');
    $data = Array(
      ':username' => $username,
      ':password' => $password
    );
    $sql->execute($data);

    $result = $sql->rowcount();
    $data = $sql->fetch();

    if ($result > 0) {
      $_SESSION['role'] = $data['role'];
      $_SESSION['username'] = $data['username'];
      $_SESSION['userdata'] = $data;

      $_SESSION['green-notice'] = "Login berhasil, selamat datang " . $_SESSION['username'];
      echo "<script>location='$HOST_NAME/dashboard.php'</script>";
    } else {

      $_SESSION['red-notice'] = "Username atau password anda salah";
      echo "<script>location='$HOST_NAME/page_login.php'</script>";
    }
  } catch (Exception $e) {

    $_SESSION['red-notice'] = "Terjadi kesalahan " . $e->getMessage();
    echo "<script>location='$HOST_NAME/page_login.php'</script>";
  }
}
?>