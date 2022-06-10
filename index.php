<?php
// vars: $title, $home, $customHead, $documentRoot
// returns: $phpStaticDir
$title = "Top";
$home = true;
$customHead = "";
$documentRoot = __DIR__ . "";
include_once $documentRoot . "/static/php/env/var.php";
ini_set('display_errors', 1);
?>
<?php include_once $phpStaticDir . "/components/head.php"; ?>
<?php include_once $phpStaticDir . "/components/header.php"; ?>
<div class="main-container" id="mainContainer">
  <div class="main-content">
    <h1>Welcome to hack.probmkr.com!</h1>
    <h2>This site is a very easy ctf site.</h2>
    <p>But, it's on developing now.</p>
    <p>Please wait.</p>
    <p><a href="phptest/">phptest</a></p>
    <p><a href="hack/">hack top</a></p>
  </div>
</div>
<?php include_once $phpStaticDir . "/components/footer.php"; ?>
<?php include_once $phpStaticDir . "/components/foot.php"; ?>
