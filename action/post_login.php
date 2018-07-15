POST Login

<?php include "config.php" ?>
<?php
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  try {
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
      header("location: $HOST_NAME/dashboard.php");
    } else {

      $_SESSION['red-notice'] = "Username atau password anda salah";
      header("location: $HOST_NAME/page_login.php");
    }
  } catch (Exception $e) {

    $_SESSION['red-notice'] = "Terjadi kesalahan " . $e->getMessage();
    header("location: $HOST_NAME/page_login.php");
  }
}
?>