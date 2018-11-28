<?php 

global $base_url;

$url=$base_url.'/'.$variables['directory'];

?>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-lg-4 offset-md-3 offset-lg-4">
      <div class="log-cont">
        <div class="logo">
              <img src="<?php echo($url); ?>/images/fotorent_white.png" alt="logo">
            </div>
<?php
$form = drupal_get_form('user_register_form');
print drupal_render($form);
?>
  </div>
      </div>
  </div>
</div>
<div id="footer-wrapper"><div class="section">
<?php $block = block_load('block', '2');
$render=_block_render_blocks(array($block));
$block=_block_get_renderable_array($render);
$output = drupal_render($block);
print $output; ?></div>