<header class="main-header">
  <a href="index.php" class="logo">
    <span class="logo-mini"><b>C</b>P</span>
    <span class="logo-lg"><b>Certi</b>Tect</span>
  </a>

  <nav class="navbar navbar-static-top">
    <a href="" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li>
          <a href="?page=setting"><i class="fa fa-gears"></i></a>
        </li>
        <li>
          <?php if (isset($_SESSION['role'])): ?>
            <a href="">Hello, <?php echo $_SESSION['username']; ?></a>
          <?php endif ?>
        </li>
        <li>
          <?php if (isset($_SESSION['role'])): ?>
            <a href="action/post_logout.php"><i class="fa fa-sign-out"></i> Logout</a>
          <?php else: ?>
            <li><a href="page_login.php">Login</a></li>
          <?php endif ?>
        </li>
      </ul>
    </div>
  </nav>
</header>