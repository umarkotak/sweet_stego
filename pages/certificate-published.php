<?php
$sql = $conn->prepare("SELECT * FROM published_certificates ORDER BY id DESC");
$data = Array();
$sql->execute($data);
$certificates = $sql->fetchAll();
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Published Certificate
    <small>Data sertifikat resmi yang telah dipublish</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Certificate</a></li>
    <li class="active">Published</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Data sertifikat terpublikasi</h3>
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
                <th>Status</th>
                <th>Aksi</th>
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
                <td><img src="images/published_certificate/<?php echo $certifacate['link_gambar']; ?>" class="img-thumbnail" style="width: 120px; height: 70px;"></td>
                <td><?php echo $certifacate['status']; ?></td>
                <td>
                  <a href="images/published_certificate/<?php echo $certifacate['link_gambar']; ?>" class="btn btn-success btn-xs">lihat</a>
                  <a href="" class="btn btn-danger btn-xs">hapus</a>
                </td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
