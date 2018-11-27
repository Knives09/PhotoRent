<?php
global $base_url;
  $menu=menu_tree_all_data("main-menu", $link = NULL, $max_depth = NULL);
?>
<div class="">
    <div class="">
      <div class="">
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
        <?php }?>
        </ul>
      </div>
    </div>
  </div>