<?php 
global $user;


if (user_is_logged_in()&&!isset($user->roles[4])){
print theme('user_picture', array('account' => $user));

$user_full = user_load($user->uid); // user_load(uid) returns the complete array
?>
<p>Ciao <?php echo($user_full->field_nome_e_cognome['und'][0]['value']); ?>
</p>
<p>Hai ancora <?php echo("N.Giorni "); ?> giorni per aggiungere extra alla tua mostra.</p>
<div>
  <h2><a href="">Le tue mostre</a></h2>
</div>
<div>
  <h2><a href="">Offerte</a></h2>
</div>
<div>
  <h2><a href="">Tutte le mostre</a></h2>
</div>
<?php } 
else if (user_is_logged_in()&&isset($user->roles[4])){
print theme('user_picture', array('account' => $user));

$user_full = user_load($user->uid); // user_load(uid) returns the complete array
?>
<p>Ciao <?php echo($user_full->field_nome_e_cognome['und'][0]['value']); ?>
</p>
<div>
  <h2><a href="">Le tue mostre</a></h2>
</div>
<div>
  <h2><a href="">Tutte le mostre</a></h2>
</div>
<?php } 
else{?>

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<div class="log-cont">
				<div class="logo">
				  		<img src="" alt="logo">
				  	</div>

				<?php
				  //$form = drupal_get_form('user_register_form');
				$form=drupal_get_form('user_login_block');
				  print(drupal_render($form));

				  //print drupal_render($form);
				 }?>
				</div>
			</div>
	</div>
</div>