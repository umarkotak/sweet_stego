<?php include "config.php" ?>
<?php include "head.php"; ?>
<?php include "notice.php" ?>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Certi</b>Tect</a>
  </div>

  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="action/post_login.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit">Sign In</button>
        </div>
      </div>
    </form>

    <a href="page_register.php" class="text-center">Register a new membership</a>

  </div>
</div>
</body>
