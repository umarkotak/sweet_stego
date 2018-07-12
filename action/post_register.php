POST Register

<?php include "config.php" ?>
<?php
if (isset($_POST['submit'])) {
  $full_name = $_POST['full_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password_confirmation = $_POST['password_confirmation'];
  $role = 'user';

  try {
    $sql = $conn->prepare('INSERT INTO users (full_name, email, password, role) values (:full_name, :email, :password, :role)');
    $data = Array(
      ':full_name' => $full_name,
      ':email' => $email,
      ':password' => $password,
      ':role' => $role
    );
    // $sql->execute($data);
    $_SESSION['green-notice'] = "Pendaftaran berhasil";
    header("location: $HOST_NAME/index.php");
  } catch (Exception $e) {

    $_SESSION['red-notice'] = "Terjadi kesalahan " . $e->getMessage();
    header("location: $HOST_NAME/page_register.php");
  }
}
?>