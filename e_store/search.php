<?php

require_once 'db/connect.php';

if(isset($_GET['keywords'])) {
  $keywords = $db->escape_string($_GET['keywords']);
  $query = $db->query("
    SELECT Name
    FROM products
    WHERE Name LIKE '%{$keywords}%'
  ");
  ?>

  <div class="result-count">
    Found <?php echo $query->num_rows; ?> results.
  </div>

  <?php

    if($query->num_rows) {
      while($r = $query->fetch_object()) {
      ?>
        <div class="result">
          <a href=""><?php echo $r->Name; ?></a>
        </div>

      <?php
      }
    }

}
