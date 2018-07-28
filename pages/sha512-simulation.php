<script src="lib/crypto/sha512v3-log.js"></script>
<script src="lib/crypto/aes.js"></script>

<section class="content-header">
  <h1>
    SHA-512
    <small>Simulation panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Sha512 simulation</li>
  </ol>
</section>

<form>
  <section class="content">
    <div class="row">
      <div class="col-sm-4">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">SHA-512 Calculation step by step</h3>
          </div>

          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Input Raw Text :</label>
                  <input type="text" name="raw_text" id="raw_text" class="form-control" value="SERTIFIKAT">
                </div>

                <div class="form-group">
                  <button type="button" id="btn_encrypt_message" class="btn btn-success btn-sm btn-block" onclick="encrypt_message()">Encrypt Message</button>
                </div>
              </div>

              <div class="col-md-4">
              </div>

              <div class="col-md-4">
              </div>
            </div>
          </div>

          <div class="box-footer">
          </div>
        </div>
      </div>
    </div>
  </section>
</form>

<script type="text/javascript">

function encrypt_message() {
  var raw_message = $('#raw_text').val();
  var encrypted_message = Sha512.hash(raw_message);
  console.log('Final Result : ', encrypted_message);
}

</script>