<?php session_start(); ?>
<?php include "config.php" ?>
<?php include "head.php"; ?>
<?php include "notice.php" ?>

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
        </div>

      </section>
    </div>
  </div>

  <?php include "footer.php"; ?>

</div>
</body>

<?php include "script.php"; ?>
