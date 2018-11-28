<?php 

global $base_url;

$url=$base_url.'/'.$variables['directory'];

?>

<div class="container">
  <div class="row">
    <div class="col-md-4 offset-md-4">
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