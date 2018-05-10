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

    <form>

    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Masukkan Data Sertifikat</h3>
        </div>

        <div class="box-body">
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
            <textarea id="certificate_information" name="certificate_information" class="form-control" rows="4" placeholder="sertifikat workshop html lab dasar"></textarea>
          </div>
        </div>
      </div>

      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Masukkan Data Pemilik</h3>
        </div>

        <div class="box-body">
          <div class="form-group">
            <label>Nama</label>
            <input type="text" id="owner_name" name="owner_name" class="form-control" placeholder="m umar ramadhana">
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
            <img id="preview_certificate_image" width="100%" class="image">
          </div>

          <div id="div_confirmation" class="form-group" hidden>
            <button id="btn_protect_certificate" name="btn_protect_certificate" type="submit" onclick="" class="btn btn-success pull-right">Protect Certificate</button>
          </div>
        </div>
      </div>
    </div>

    </form>

  </div>
</section>

<script type="text/javascript">

  var preview_image = function(event) {
    var preview_certificate_image = document.getElementById('preview_certificate_image');
    preview_certificate_image.src = URL.createObjectURL(event.target.files[0]);
    $("#div_confirmation").show();
  };

</script>