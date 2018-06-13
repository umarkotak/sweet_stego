<?php session_start(); ?>
<?php include "config.php" ?>
<?php include "head.php"; ?>
<?php include "notice.php" ?>

<?php
$sql = $conn->prepare("SELECT * FROM published_certificates ORDER BY id DESC");
$data = Array();
$sql->execute($data);
$certificates = $sql->fetchAll();
?>

<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand"><b>Certi</b>Tect</a>
        </div>

        <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="#">Check Certificate</a></li>
            <li><a href="page_login.php">Login</a></li>
          </ul>
        </div>

      </div>
    </nav>
  </header>

  <div class="content-wrapper">
    <div class="container">

      <section class="content-header">
        <h1>
          Certi Protect
          <small>Version 0.1</small>
        </h1>
      </section>

      <section class="content">

        <div class="row">
          <div class="col-sm-4">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Welcome</h3>
              </div>
              <div class="box-body">
                <p style="text-align: justify;">
                  Certi protect, merupakan aplikasi online untuk pengamanan sertifikat anda. Menggunakan teknologi steganografi untuk melindungi sertifikat digital anda.
                </p>
              </div>
            </div>
          </div>

          <div class="col-sm-8">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Features</h3>
              </div>
              <div class="box-body">
                <p style="text-align: justify;">
                  <ol>
                    <li>Menjaga sertifikat anda dengan steganografi yang dikombinakasikan dengan kriptografi SHA</li>
                    <li>Mapping informasi secara acak pada gambar, akan sulit untuk dipalsukan</li>
                  </ol>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div  class="row">
          <div class="col-sm-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Sertifikat Terpublikasi -</h3> <small>silahkan cari sertifikat anda</small>
              </div>

              <div class="box-body">
                <table id="data_table" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Pemilik</th>
                      <th>Sertifikat</th>
                      <th>Penerbit</th>
                      <th>Tanggal Terbit</th>
                      <th>Nomor Sertifikat</th>
                      <th>Informasi Tambahan</th>
                      <th>Gambar</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($certificates as $certifacate): ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $certifacate['nama_pemilik']; ?></td>
                      <td><?php echo $certifacate['nama_sertifikat']; ?></td>
                      <td><?php echo $certifacate['penerbit_sertifikat']; ?></td>
                      <td><?php echo $certifacate['tanggal_terbit']; ?></td>
                      <td><?php echo $certifacate['nomor_sertifikat']; ?></td>
                      <td><?php echo $certifacate['informasi_tambahan']; ?></td>
                      <td><a data-toggle="modal" data-target="#modal-primary-<?php echo $no; ?>"><img src="images/published_certificate/<?php echo $certifacate['link_gambar']; ?>" class="img-thumbnail" style="width: 120px; height: 70px;"></a></td>
                    </tr>

                    <div class="modal modal-primary fade" id="modal-primary-<?php echo $no; ?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Sertifikat <?php echo $certifacate['nama_sertifikat']; ?></h4>
                          </div>
                          <div class="modal-body">
                            <img src="images/published_certificate/<?php echo $certifacate['link_gambar']; ?>" class="img-thumbnail">
                          </div>
                          <div class="modal-footer">
                            <a class="btn btn-success btn-sm pull-right" href="images/published_certificate/<?php echo $certifacate['link_gambar']; ?>" download>Download</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>

              <div class="box-footer">
                <p>Silahkan click gambar untuk melihat sertifikat</p>
              </div>
            </div>
          </div>
        </div>

        <div  class="row">
          <div class="col-sm-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Check Keaslian Sertifikat</h3></small>
              </div>

              <div class="box-body">
                <table>
                  
                </table>
              </div>
            </div>
          </div>
        </div>

      </section>
    </div>
  </div>

  <?php include "footer.php"; ?>

</div>
</body>

<?php include "script.php"; ?>
