<?php
$sql = $conn->prepare("SELECT * FROM certificates WHERE status = 'verified'");
$data = array();
$sql->execute($data);
$verified_count = $sql->rowcount();
$sql = $conn->prepare("SELECT * FROM certificates");
$sql->execute($data);
$uploaded_count = $sql->rowcount();
$sql = $conn->prepare("SELECT * FROM certificates WHERE status = 'fake'");
$sql->execute($data);
$fake_count = $sql->rowcount();
$sql = $conn->prepare("SELECT * FROM published_certificates");
$sql->execute($data);
$published_count = $sql->rowcount();
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">

    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?php echo $published_count; ?></h3>

          <p>Sertifikat Terpublish</p>
        </div>
        <div class="icon">
          <i class="fa fa-copy"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?php echo $uploaded_count; ?></h3>

          <p>Sertifikat Terupload</p>
        </div>
        <div class="icon">
          <i class="fa fa-cloud-upload"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?php echo $verified_count; ?></h3>

          <p>Sertifikat Asli</p>
        </div>
        <div class="icon">
          <i class="fa fa-check-square-o"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-red">
        <div class="inner">
          <h3><?php echo $fake_count; ?></h3>

          <p>Sertifikat Palsu</p>
        </div>
        <div class="icon">
          <i class="fa fa-bug"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

  </div>
</section>
