<?php
global $base_url;
  $menu=menu_tree_all_data("main-menu", $link = NULL, $max_depth = NULL);
?>
<footer class="footer">
  <div class="container">
    <nav class="nav nav-footer">
      <ul>
      <?php
        foreach ($menu as $key) { ?>
          <li>
            <a href="<?php echo($key['link']['href']); ?>"><?php echo($key['link']['link_title']); ?></a>
          <?php if (isset($key['below'])){ ?>
            <ul>
              <?php foreach ($key['below'] as $value) { ?>
              <li><a href="<?php print ($value['link']['link_path']); ?>"><?php print($value['link']['link_title']); ?></a></li>
              <?php } ?>
            </ul>
          <?php } ?>
          </li>
      <?php }
       ?>
      </ul>
    </nav>
    <div class="footer-bottom">
      <div class="logo-footer">
        <img src="" alt="">
        <span>Fotorent</span>
      </div>
      <div class="privacy-social">
        <span>Privacy note legali lorem etc etc</span>
      </div>
    </div>
  </div>
</footer>