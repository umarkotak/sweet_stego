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

<script src="lib/cleanstego.js"></script>
<script src="lib/crypto/sha512v3.js"></script>
<script src="lib/crypto/aes.js"></script>
<script src="lib/crypto/aesctr.js"></script>

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
            <li><a href="#check-certificate">Check Certificate</a></li>
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

                    <?php $no += 1; ?>
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

        <form method="post" action="action/post_upload_certificate_from_index.php" enctype="multipart/form-data">
          <div  class="row" id="check-certificate">
            <div class="col-sm-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Upload Sertifikat</h3></small>
                </div>

                <div class="box-body">
                  <div class="row">
                    <div class="col-sm-10">
                      <div class="form-group">
                        <input type="file" id="certificate_image" name="certificate_image" onchange="preview_image(event)" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <input type="hidden" id="certificate_owner_name" name="certificate_owner_name" class="form-control" readonly>
                      <input type="hidden" id="certificate_name" name="certificate_name" class="form-control" readonly>
                      <input type="hidden" id="certificate_publisher" name="certificate_publisher" class="form-control" readonly>
                      <input type="hidden" id="certificate_date_published" name="certificate_date_published" class="form-control" readonly>
                      <input type="hidden" id="certificate_number" name="certificate_number" class="form-control" readonly>
                      <input type="hidden" id="certificate_additional_information" name="certificate_additional_information" class="form-control" rows="4" readonly>
                      <input type="hidden" id="result" name="result" class="form-control" rows="4" readonly>

                      <button id="valid-button" name="btn_upload_certificate" type="submit" class="btn btn-success btn-block btn-sm" style="display: none;">Upload Certificate</button>
                      <button id="invalid-button" class="btn btn-danger btn-block btn-sm" style="display: none;" disabled>Invalid Certificate</button>
                      <button id="processing-button" type="button" class="btn btn-default btn-block btn-sm" style="display: none;" disabled><i class="fa fa-spin fa-refresh"></i>&nbsp; Processing</button>
                    </div>
                    <div class="col-sm-12">
                      <img id="preview_certificate_image" width="100%" class="img-thumbnail">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>

      </section>
    </div>
  </div>

  <?php include "footer.php"; ?>

</div>
</body>

<script type="text/javascript">

  var preview_image = function(event) {
    var preview_certificate_image = document.getElementById('preview_certificate_image');
    preview_certificate_image.src = URL.createObjectURL(event.target.files[0]);

    $("#valid-button").css({"display": "none"});
    $("#invalid-button").css({"display": "none"});
    $("#processing-button").css({"display": "block"});

    check_certificate_validity();
  };

  function check_certificate_validity() {
    function readfunc(){
      var certificate_data = readMsgFromCanvas('canvas',"default");

      if(certificate_data != null){
          $("#result").val(certificate_data);
          console.log(certificate_data)

          if (certificate_data.includes("0|")) {
            var output = certificate_data.split("0|");

            try {
              output = AesCtr.decrypt(output[0], output[1].split("").reverse().join(""),256);
              var certificate = JSON.parse(output);

              $("#certificate_name").val(certificate.certificate_name);
              $("#certificate_publisher").val(certificate.certificate_publisher);
              $("#certificate_date_published").val(certificate.certificate_date_published);
              $("#certificate_number").val(certificate.certificate_number);
              $("#certificate_additional_information").val(certificate.certificate_additional_information);
              $("#certificate_owner_name").val(certificate.certificate_owner_name);
              $("#after_check").show();
            } catch(e) {
              console.log("Fake, Wrong key");
            }

            $("#processing-button").css({"display": "none"});
            $("#valid-button").css({"display": "block"});
            $("#invalid-button").css({"display": "none"});
            console.log(output);
          } else {

            $("#processing-button").css({"display": "none"});
            $("#valid-button").css({"display": "none"});
            $("#invalid-button").css({"display": "block"});
            console.log("Fake");
          }

      } else $("#result").val('Data tidak ditemukan');

    }
    loadIMGtoCanvas('certificate_image','canvas',readfunc);
  }

</script>

<?php include "script.php"; ?>
