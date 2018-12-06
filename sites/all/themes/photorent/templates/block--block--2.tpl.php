<?php
global $base_url;
  $menu=menu_tree_all_data("main-menu", $link = NULL, $max_depth = NULL);
?>
<footer class="footer">
  <div class="container">
    <nav class="nav nav-footer">
      <ul>
        <?php
          foreach ($menu as $key) {  ?>
            <li>
              <a href="<?php if($key['link']['href']!="<front>"){echo($base_url."/".$key['link']['href']);} else{echo("/");} if(isset($key['link']['options']['query']['field_categorie_tid%5B%5D'])&&isset($key['link']['options']['query']['field_artista_tid'])){echo("?field_categorie_tid%255B%255D=3&field_artista_tid=All");} ?>"><?php echo($key['link']['link_title']); ?></a>
            <?php if (isset($key['below'])){ ?>
              <ul>
                <?php foreach ($key['below'] as $value) { ?>
                <li><a href="<?php print ($value['link']['link_path']); ?>"><?php print($value['link']['link_title']); ?></a></li>
                <?php } ?>
              </ul>
            <?php } ?>
            </li>
        <?php }?>
        <li><a href="<?php echo($base_url.'/cart'); ?>">Cart</a></li>
        <li><a href="<?php echo($base_url.'/user/'.$user->uid.'/orders'); ?>">Le mie mostre</a></li>
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