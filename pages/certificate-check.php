<!-- <script src="lib/cryptostego.js"></script> -->
<script src="lib/cleanstego.js"></script>
<script src="lib/crypto/sha512v3.js"></script>
<script src="lib/crypto/aes.js"></script>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Check Certificate
    <small>.</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-8">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">File Sertifikat</h3>
        </div>

        <div class="box-body">
          <div class="form-group">
            <label>Upload gambar sertifikat</label>
            <p>format : jpg, png</p>
            <input type="file" id="certificate_image" name="certificate_image" onchange="preview_image(event)" class="form-control">
            <img id="preview_certificate_image" width="100%" class="img-thumbnail">
          </div>

          <div id="process_certificate_section" class="form-group" hidden>
            <button id="btn_check_certificate" name="btn_check_certificate" class="btn btn-success pull-right" onclick="check_certificate()" >Check Certificate</button>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Informasi Sertifikat</h3>
        </div>

        <div class="box-body">
          <div class="form-group">
            <label>Nama Pemilik Sertifikat</label>
            <input type="text" id="certificate_owner_name" name="certificate_owner_name" class="form-control" readonly>
          </div>

          <div class="form-group">
            <label>Nama Sertifikat</label>
            <input type="text" id="certificate_name" name="certificate_name" class="form-control" readonly>
          </div>

          <div class="form-group">
            <label>Penerbit Sertifikat</label>
            <input type="text" id="certificate_publisher" name="certificate_publisher" class="form-control" readonly>
          </div>

          <div class="form-group">
            <label>Tanggal Terbit Sertifikat</label>
            <input type="text" id="certificate_date_published" name="certificate_date_published" class="form-control" readonly>
          </div>

          <div class="form-group">
            <label>Nomor Sertifikat</label>
            <input type="text" id="certificate_number" name="certificate_number" class="form-control" readonly>
          </div>

          <div class="form-group">
            <label>Informasi Tambahan</label>
            <textarea id="certificate_additional_information" name="certificate_additional_information" class="form-control" rows="4" readonly></textarea>
          </div>

          <div class="form-group">
            <label>Result Test Form</label>
            <textarea id="result" name="result" class="form-control" rows="4" readonly></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">

  var preview_image = function(event) {
    var preview_certificate_image = document.getElementById('preview_certificate_image');
    preview_certificate_image.src = URL.createObjectURL(event.target.files[0]);
    $("#process_certificate_section").show();
  };

  function check_certificate() {
    // read_data_from_image();
    read_data_from_image_clean();
  }

  function read_data_from_image(){
    $("#result").html('Processing...');
    function readfunc(){
      var certificate_data = readMsgFromCanvas('canvas',"default",0);

      if(certificate_data != null){
          $("#result").val(certificate_data);
          console.log(certificate_data)

          if (certificate_data.includes("0|")) {
            var output = certificate_data.split("0|");

            try {
              output = GibberishAES.dec(output[0], output[1].split("").reverse().join(""));
              var certificate = JSON.parse(output);

              $("#certificate_name").val(certificate.certificate_name);
              $("#certificate_publisher").val(certificate.certificate_publisher);
              $("#certificate_date_published").val(certificate.certificate_date_published);
              $("#certificate_number").val(certificate.certificate_number);
              $("#certificate_additional_information").val(certificate.certificate_additional_information);
              $("#certificate_owner_name").val(certificate.certificate_owner_name);
            } catch(e) {
              console.log("Fake, Wrong key");
            }

            console.log(output);
          } else {
            console.log("Fake");
          }

      }else $("#result").val('Data tidak ditemukan');

    }
    loadIMGtoCanvas('certificate_image','canvas',readfunc);
  }

  function read_data_from_image_clean(){
    $("#result").html('Processing...');
    function readfunc(){
      var certificate_data = readMsgFromCanvas('canvas',"default");

      if(certificate_data != null){
          $("#result").val(certificate_data);
          console.log(certificate_data)

          if (certificate_data.includes("|")) {
            var output = certificate_data.split("|");

            try {
              output = GibberishAES.dec(output[0], output[1].split("").reverse().join(""));
              var certificate = JSON.parse(output);

              $("#certificate_name").val(certificate.certificate_name);
              $("#certificate_publisher").val(certificate.certificate_publisher);
              $("#certificate_date_published").val(certificate.certificate_date_published);
              $("#certificate_number").val(certificate.certificate_number);
              $("#certificate_additional_information").val(certificate.certificate_additional_information);
              $("#certificate_owner_name").val(certificate.certificate_owner_name);
            } catch(e) {
              console.log("Fake, Wrong key");
            }

            console.log(output);
          } else {
            console.log("Fake");
          }

      }else $("#result").val('Data tidak ditemukan');

    }
    loadIMGtoCanvas('certificate_image','canvas',readfunc);
  }

</script>

