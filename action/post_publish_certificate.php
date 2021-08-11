<section class="content-header">
  <h1>
    POST
    <small><?php echo "string"; ?></small>
  </h1>
</section>

<?php
try {
  $nama_pemilik = $_POST['certificate_owner_name'];
  $nama_sertifikat = $_POST['certificate_name'];
  $penerbit_sertifikat = $_POST['certificate_publisher'];
  $tanggal_terbit = $_POST['certificate_date_published'];
  $nomor_sertifikat = $_POST['certificate_number'];
  $informasi_tambahan = $_POST['certificate_additional_information'];
  $link_gambar = $nama_pemilik . "-" . $tanggal_terbit . "-" . $nama_sertifikat . ".png";
  $link_gambar = str_replace(" ","_",$link_gambar);
  if (empty(strcmp($link_gambar, '--.png'))) { $link_gambar = uniqid() . ".png"; }
  $base64_certificate = $_POST['base64_certificate'];
  $classification = $_POST['certificate_classification'];
  $status = 'published';

  $name_image  = $link_gambar;
  $loc_image   = $_FILES['certificate_image']['tmp_name'];

  $link        = explode('.',$name_image);
  $extension   = strtolower(end($link));

  $move_success = move_uploaded_file($loc_image,"images/published_certificate/$name_image");

  if (empty($move_success)) {
    $_SESSION['red-notice'] = "Terjadi kesalahan gagal memindahkan sertifikat";
    echo "<script>location='dashboard.php?page=certificate-protect'</script>";
    die();
  }

  $data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64_certificate));
  $filepath = "images/published_certificate/$name_image";
  $put_content_success = file_put_contents($filepath,$data);

  if (empty($put_content_success)) {
    $_SESSION['red-notice'] = "Terjadi kesalahan gagal meletakkan sertifikat";
    echo "<script>location='dashboard.php?page=certificate-protect'</script>";
    die();
  }

} catch (Exception $e) {

  $_SESSION['red-notice'] = "Terjadi kesalahan " . $e->getMessage();
  echo "<script>location='dashboard.php?page=certificate-protect'</script>";
}

try {
  $sql = $conn->prepare('INSERT INTO published_certificates (nama_pemilik, nama_sertifikat, penerbit_sertifikat, tanggal_terbit, nomor_sertifikat, informasi_tambahan, link_gambar, status, classification)
         values (:nama_pemilik, :nama_sertifikat, :penerbit_sertifikat, :tanggal_terbit, :nomor_sertifikat, :informasi_tambahan, :link_gambar, :status, :classification)');

  $data = array(':nama_pemilik' => $nama_pemilik,
                ':nama_sertifikat' => $nama_sertifikat,
                ':penerbit_sertifikat' => $penerbit_sertifikat,
                ':tanggal_terbit' => $tanggal_terbit,
                ':nomor_sertifikat' => $nomor_sertifikat,
                ':informasi_tambahan' => $informasi_tambahan,
                ':link_gambar' => $link_gambar,
                ':status' => $status,
                ':classification' => $classification
              );
  $sql->execute($data);

  $_SESSION['green-notice'] = "Sertifikat anda berhasil di publish";
  echo "<script>location='dashboard.php?page=certificate-protect'</script>";
} catch (Exception $e) {

  $_SESSION['red-notice'] = "Terjadi kesalahan " . $e->getMessage();
  echo "<script>location='dashboard.php?page=certificate-protect'</script>";
}

?>