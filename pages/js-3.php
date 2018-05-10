<script type="text/javascript" src="lib/histogram.js"></script>

<section class="content-header">
  <h1>
    JS Exercise - Histogram
    <small>JavaScript 3</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">JavaScript 2</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label>Upload gambar sertifikat</label>
        <p>format : jpg, png</p>
        <input type="file" id="certificate_image" name="certificate_image" onchange="preview_image(event)" class="form-control">
        <img id="preview_certificate_image" width="100%" class="img-thumbnail">
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
  histogram("images/sample_certificate/certi_grey_enc.png", function (err, data) {
      console.log("images/sample_certificate/certi_grey_enc.png" + ' has ' + data.colors.rgba + ' colors');
      console.log("images/sample_certificate/certi_grey_enc.png" + ' has ' + data.red + ' colors');
  });
</script>