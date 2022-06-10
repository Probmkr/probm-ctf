<?php
// vars: $title, $home, $customHead, $documentRoot
// returns: $phpStaticDir
$title = "";
$home = false;
$customHead = "";
$documentRoot = __DIR__ . "/..";
include_once $documentRoot . "/static/php/env/var.php";
ini_set('display_errors', 1);
?>
<?php include_once $phpStaticDir . "/components/head.php"; ?>
<?php include_once $phpStaticDir . "/components/header.php"; ?>
<div class="main-container" id="mainContainer">
  <div class="main-content">



  </div>
</div>
<?php include_once $phpStaticDir . "/components/footer.php"; ?>
<?php include_once $phpStaticDir . "/components/foot.php"; ?>
