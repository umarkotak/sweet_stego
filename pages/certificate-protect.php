<!-- <script src="lib/cryptostego.js"></script> -->
<script src="lib/cleanstego.js"></script>
<script src="lib/crypto/sha512v3.js"></script>
<script src="lib/crypto/aes.js"></script>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Protect Certificate
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
    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Masukkan Data Sertifikat</h3>
        </div>

        <div class="box-body">
          <div class="form-group">
            <label>Nama Pemilik Sertifikat</label>
            <input type="text" id="certificate_owner_name" name="certificate_owner_name" class="form-control" placeholder="m umar ramadhana">
          </div>

          <div class="form-group">
            <label>Nama Sertifikat</label>
            <input type="text" id="certificate_name" name="certificate_name" class="form-control" placeholder="workshop html dasar">
          </div>

          <div class="form-group">
            <label>Penerbit Sertifikat</label>
            <input type="text" id="certificate_publisher" name="certificate_publisher" class="form-control" placeholder="lab dasar stt pln">
          </div>

          <div class="form-group">
            <label>Tanggal Terbit Sertifikat</label>
            <input type="date" id="certificate_date_published" name="certificate_date_published" class="form-control">
          </div>

          <div class="form-group">
            <label>Nomor Sertifikat</label>
            <input type="text" id="certificate_number" name="certificate_number" class="form-control" placeholder="201701">
          </div>

          <div class="form-group">
            <label>Informasi Tambahan</label>
            <textarea id="certificate_additional_information" name="certificate_additional_information" class="form-control" rows="4" placeholder="sertifikat workshop html lab dasar"></textarea>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-8">
      <div class="box box-primary">
        <div class="box-header">
        </div>

        <div class="box-body">
          <div class="form-group">
            <label>Upload Gambar Sertifikat</label>
            <p>Gambar sertifikat yang diupload akan di resize menjadi 800 x 450 pixels,</p>
            <input type="file" accept="image/*" id="certificate_image" name="certificate_image" onchange="preview_image(event)" class="form-control">
            <img id="preview_certificate_image" width="100%" class="img-thumbnail">
          </div>

          <div id="div_confirmation" class="form-group">
            <button id="btn_protect_certificate" name="btn_protect_certificate" onclick="protect_certificate()" class="btn btn-success pull-right">Protect Certificate</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Hasil Sertifikat</h3>
        </div>

        <div class="box-body">
          <div class="form-group">
            <label>Pesan : </label>
            <textarea id="raw_message" class="form-control" rows="4" readonly></textarea>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="box box-primary">
        <div class="box-header">
        </div>

        <div class="box-body">
          <div id="result" style="background-color: rgba(0,255,0,0.3); padding: 10px 10px 10px 10px;" hidden></div>
          <div style="height: 460px;">
            <img src="" id="certificate_final_image" class="img-thumbnail">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row" style="display: block">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Log Sertifikat Sebelum Steganografi</h3>
        </div>

        <div class="box-body">
          <div id="log-before">
            <div class="form-group">
              <label>Tahap 1 : Enkripsi Pesan</label><br>

              <label>Pesan Asli : </label>
              <textarea id="log_before_raw_message" class="form-control" rows="4" readonly></textarea>

              <label>Hasil Enkripsi sha512 : </label>
              <textarea id="log_before_message_encrypted_by_sha512" class="form-control" rows="4" readonly></textarea>

              <label>Hasil Enkripsi AES dengan Kunci sha512</label>
              <textarea id="log_before_message_encrypted_by_aes" class="form-control" rows="4" readonly></textarea>

              <label>Spesifikasi Pesan</label>
              <textarea id="log_before_message_spesification" class="form-control" rows="1" readonly></textarea>

              <label>Pesan dalam bentuk ASCII dan Biner</label>
              <textarea id="log_before_message_in_binary" class="form-control" rows="6" readonly></textarea>

              <br><br><label>Tahap 2 : Penyisipan Pesan</label><br>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Log Sertifikat Sesudah Steganografi</h3>
        </div>

        <div class="box-body">
          <div id="log-after">
            <div class="form-group">
              <label>Data Warna Tiap Pixel</label>
            </div>
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
    $("#div_confirmation").show();
  };

  function protect_certificate() {
    var certificate_data = {};
    certificate_data["certificate_name"] = $("#certificate_name").val();
    certificate_data["certificate_publisher"] = $("#certificate_publisher").val();
    certificate_data["certificate_date_published"] = $("#certificate_date_published").val();
    certificate_data["certificate_number"] = $("#certificate_number").val();
    certificate_data["certificate_additional_information"] = $("#certificate_additional_information").val();
    certificate_data["certificate_owner_name"] = $("#certificate_owner_name").val();

    var certificate_data_json = JSON.stringify(certificate_data);
    var certificate_data_json_512hash = Sha512.hash(certificate_data_json);
    var certificate_data_json_enc = GibberishAES.enc(certificate_data_json, certificate_data_json_512hash);
    var certificate_data_json_dec = GibberishAES.dec(certificate_data_json_enc, certificate_data_json_512hash);
    var certificate_secret_data = certificate_data_json_enc + "0|" + certificate_data_json_512hash.split("").reverse().join("");

    var output = certificate_secret_data.split("0|");
    output = GibberishAES.dec(output[0], output[1].split("").reverse().join(""));

    var message_spesification = {};
    message_spesification["panjang_pesan"] = certificate_secret_data.length;
    message_spesification["panjang_pesan_dalam_bit"] = certificate_secret_data.length*8;

    $("#raw_message").val(certificate_data_json);
    $("#log_before_raw_message").val(certificate_data_json);
    $("#log_before_message_encrypted_by_sha512").val(certificate_data_json_512hash);
    $("#log_before_message_encrypted_by_aes").val(certificate_secret_data);
    $("#log_before_message_spesification").val(JSON.stringify(message_spesification));

    write_data_to_image_clean(certificate_secret_data);
  }

  function write_data_to_image_clean(certificate_secret_data){
    $("#certificate_final_image").hide();
    $("#certificate_final_image").attr('src','');
    $("#result").html('Sedang mengolah gambar sertifikat . . .');
    function writefunc(){
      var t = writeMsgToCanvas('canvas',certificate_secret_data,"default");
      if(t!=null){
        var myCanvas = document.getElementById("canvas");
        var image = myCanvas.toDataURL("image/png");
        $("#certificate_final_image").attr('src',image);
        $("#result").html('Data rahasia berhasil disisipkan, Silahkan save gambar di bawah ini kedalam perangkat anda.');
        $("#result").show();
        $("#certificate_final_image").show();
      }
    }
    loadIMGtoCanvas('certificate_image','canvas',writefunc,850,170);
    console.log("finished");
  }

</script>