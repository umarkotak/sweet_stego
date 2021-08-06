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
                <th>Klasifikasi</th>
                <th>Penerbit</th>
                <th>Tanggal Terbit</th>
                <th>Nomor Sertifikat</th>
                <th>Informasi Tambahan</th>
                <th>Gambar</th>
                <th>Status</th>
                <th width="5%">Aksi</th>
              </tr>
            </thead>

            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($certificates as $certificate): ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $certificate['nama_pemilik']; ?></td>
                <td><?php echo $certificate['nama_sertifikat']; ?></td>
                <td><?php echo $certificate['classification']; ?></td>
                <td><?php echo $certificate['penerbit_sertifikat']; ?></td>
                <td><?php echo $certificate['tanggal_terbit']; ?></td>
                <td><?php echo $certificate['nomor_sertifikat']; ?></td>
                <td><?php echo $certificate['informasi_tambahan']; ?></td>
                <td><a data-toggle="modal" data-target="#modal-primary-<?php echo $no; ?>"><img src="images/published_certificate/<?php echo $certificate['link_gambar']; ?>" class="img-thumbnail" style="width: 120px; height: 70px;"></a></td>
                <td><?php echo $certificate['status']; ?></td>
                <td>
                  <a data-toggle="modal" data-target="#modal-primary-<?php echo $no; ?>" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-eye-open"></i> lihat</a>
                  <a href="?action=get_delete_published_certificate&id=<?php echo $certificate['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin ingin menghapus sertifikat ini?')"><i class="glyphicon glyphicon-trash"></i> hapus</a>
                </td>
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
      </div>
    </div>
  </div>
</section>
