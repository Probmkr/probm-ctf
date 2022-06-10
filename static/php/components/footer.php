<footer id="footer" class="footer">
  <div class="footer-container">
    <div class="footer-top">
      <div id="footerNav" class="footer-nav no-a-underline">
        <ul>
          <?php
          $jsonData = file_get_contents($navDataDir . "/footer-nav.json");
          $json = json_decode($jsonData, true);
          foreach ($json as $data) {
            echo "<li>";
            echo "<a href=\"" . $data["url"] . "\">" . $data["title"] . "</a>";
            echo "</li>";
          }
          ?>
          <span class="user-select-none">/</span>
        </ul>
      </div>
    </div>
    <hr class="footer-ceparator">
    <div class="footer-bottom">
      <div id="copyright" class="copyright">
        <p>&copy; <?php echo date("Y"); ?> <?php echo SITE_TITLE; ?></p>
      </div>
    </div>
  </div>
</footer>
