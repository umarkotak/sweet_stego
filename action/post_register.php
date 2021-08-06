POST Register

<?php include "config.php" ?>
<?php
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $full_name = $_POST['full_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password_confirmation = $_POST['password_confirmation'];
  $role = 'user';

  try {
    $sql = $conn->prepare('INSERT INTO users (username, full_name, email, password, role) values (:username, :full_name, :email, :password, :role)');
    $data = Array(
      ':username' => $username,
      ':full_name' => $full_name,
      ':email' => $email,
      ':password' => $password,
      ':role' => $role
    );
    $sql->execute($data);
    $_SESSION['green-notice'] = "Pendaftaran berhasil";
    header("location: $HOST_NAME/page_login.php");
  } catch (Exception $e) {

    $_SESSION['red-notice'] = "Terjadi kesalahan " . $e->getMessage();
    header("location: $HOST_NAME/page_register.php");
  }
}
?>