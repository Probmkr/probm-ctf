<?php
// vars: $title, $home, $customHead, $documentRoot
// returns: $phpStaticDir
$title = "Hack 1";
$home = false;
$customHead = '<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">';
$documentRoot = __DIR__ . "/../..";
include_once $documentRoot . "/static/php/env/var.php";
ini_set('display_errors', 1);
?>
<?php include_once $phpStaticDir . "/components/head.php"; ?>
<?php include_once $phpStaticDir . "/components/header.php"; ?>
<div class="main-container" id="mainContainer">
  <div class="main-content">
    <h1>Hack 1</h1>
    <p>FIND FROM HTML!!</p>
  </div>
</div>
<div class="sub-container">
  <form action="/hack/hack-2/">
    FLAG:
    <input type="text">
  </form>
</div>
<div class="subsub-container"><div onclick="button()" id="button">Button</div></div>
<?php include_once $phpStaticDir . "/components/footer.php"; ?>
<?php include_once $phpStaticDir . "/components/foot.php"; ?>
<script>
function button() {
  document.getElementById("button").innerHTML = "FLAG{" + decodeURI("%EF%BC%99%EF%BD%90%EF%BC%98%EF%BC%97%E3%81%94%EF%BC%98%EF%BD%86%EF%BC%96%EF%BD%82%E3%81%85") + "}";
}
</script>