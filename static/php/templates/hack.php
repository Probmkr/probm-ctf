<?php
// vars: $title, $home, $customHead, $documentRoot
// returns: $phpStaticDir
$title="title";
$home=false;
$customHead="";
$documentRoot = __DIR__ . "/..";
include_once $documentRoot . "/static/php/env/var.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once $phpStaticDir . "/components/head.php"; ?>

<body>
<?php include_once $phpStaticDir . "/components/header.php" ?>
  <div class="main-container" id="mainContainer">
    <?php include_once $phpStaticDir . "/components/sidebar.php" ?>
    <div class="main-contents">
      <!-- main contents -->
    </div>
  </div>
<?php include_once $phpStaticDir . "/components/footer.php" ?>
</body>

</html>