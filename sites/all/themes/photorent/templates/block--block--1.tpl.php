<?php
global $base_url;
global $user;

$menu=menu_tree_all_data("main-menu", $link = NULL, $max_depth = NULL);

if(user_is_logged_in()){    
$cart = commerce_cart_order_load($user->uid); 
$total = $cart->commerce_order_total["und"][0]["amount"]; 
$total_pretty = commerce_currency_format($total,"USD");
$count = count($cart->commerce_line_items);
}
    
?>
<div class="">
    <div class="">
      <div class="">
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
        <li><a href="<?php echo($base_url.'/cart'); ?>">Cart(<?php if(isset($count)){echo $count;} ?>)</a></li>
        <li><a href="<?php echo($base_url.'/user/'.$user->uid.'/orders'); ?>">Le mie mostre</a></li>
        </ul>
      </div>
    </div>
  </div>