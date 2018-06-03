<?php
if (isset($_GET['page'])) {
  $page = $_GET['page'];

  if ($page == 'dashboard')                                      { include "pages/dashboard.php"; }
  else if ($page == 'setting')                                   { include "pages/setting.php"; }

  else if ($page == 'certificate-protect')                       { include "pages/certificate-protect.php"; }
  else if ($page == 'certificate-check')                         { include "pages/certificate-check.php"; }
  else if ($page == 'js0')                                       { include "pages/js-0.php"; }
  else if ($page == 'js1')                                       { include "pages/js-1.php"; }
  else if ($page == 'js2')                                       { include "pages/js-2.php"; }
  else if ($page == 'js3')                                       { include "pages/js-3.php"; }
  else if ($page == 'sandbox')                                   { include "pages/sandbox.php"; }
  else                                                           { include "pages/notfound.php"; }
} else {
  include "pages/dashboard.php";
}
?>