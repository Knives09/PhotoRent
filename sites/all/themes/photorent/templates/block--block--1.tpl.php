<?php
global $base_url;
global $user;

$orders = commerce_order_load_multiple(array(), array('uid' => $user->uid));
if(count($orders)==0){
  $extra="disabled";
}
else
{
  $extra="";
}

$menu=menu_tree_all_data("main-menu", $link = NULL, $max_depth = NULL);

if(user_is_logged_in()&&commerce_cart_order_load($user->uid)){    
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
        <?php if(user_is_logged_in()){?>
            <li><a class="cart-icon" href="<?php echo($base_url.'/user/logout'); ?>"><i class="material-icons"></i><span></span>Log-out</a></li>
        <?php } ?>
        <li><a class="cart-icon" href="<?php echo($base_url.'/cart'); ?>"><i class="material-icons">shopping_cart</i><span><?php if(isset($count)){echo $count;} ?></span></a></li>
        <li><a class="cart-icon" href="<?php echo($base_url.'/user'); ?>"><i class="material-icons">settings</i></a></li>
        <li class="hidden-xs"><a href="<?php echo($base_url.'/user/'.$user->uid.'/orders'); ?>">Le mie mostre</a></li>
        <?php
          foreach ($menu as $key) {  ?>
          <li class="hidden-xs<?php if($key['link']['link_title']=="Extra"){echo(" ".$extra);} ?>">
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
        </ul>
      </div>
    </div>
  </div>