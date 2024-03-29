<aside class="main-sidebar">

  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/avatar_sweet.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <?php if (isset($_SESSION['role'])): ?>
          <p><?php echo $_SESSION['username']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        <?php else: ?>
          <a href="#"><i class="fa fa-circle text-danger"></i> Offline</a>
        <?php endif ?>
      </div>
    </div>

    <ul class="sidebar-menu" data-widget="tree">

      <li class="header">MAIN MENU</li>
      <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li><a href="?page=certificate-protect"><i class="fa fa-shield"></i>Protect Certificate</a></li>
      <li><a href="?page=certificate-check"><i class="fa fa-check-square-o"></i>Check Certificate</a></li>
      <li><a href="?page=certificate-published"><i class="fa fa-copy"></i>Published Certificate</a></li>
      <li><a href="?page=certificate-manager"><i class="fa fa-list-alt"></i>Certificate Manager</a></li>
      <!-- <li><a href="?page=sha512-simulation"><i class="fa fa-lock"></i>SHA512 Simulation</a></li> -->

      <!-- <li class="header">EXERCISE</li>
      <li><a href="?page=js0"><i class="fa fa-circle-o"></i> JS 0 - JS Basic</a></li>
      <li><a href="?page=js1"><i class="fa fa-circle-o"></i> JS 1 - Steganograph</a></li>
      <li><a href="?page=js2"><i class="fa fa-circle-o"></i> JS 2 - Canvas Exercise</a></li>
      <li><a href="?page=js3"><i class="fa fa-circle-o"></i> JS 3 - Histogram</a></li> -->

    </ul>
  </section>

</aside>
