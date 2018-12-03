<?php 
global $user;

global $base_url;

$url=$base_url.'/'.$variables['directory'];


if (user_is_logged_in()){
print theme('user_picture', array('account' => $user));

$user_full = user_load($user->uid); // user_load(uid) returns the complete array
?>
<p>Ciao <?php echo($user_full->field_nome_e_cognome['und'][0]['value']); ?>
</p>
<p>Hai ancora <?php echo("N.Giorni "); ?> giorni per aggiungere extra alla tua mostra.</p>

<div class="blocks-home">
	<div class="row">
	<div class="miemostre-link col-lg-8">
	  <a href=""><h2>Le tue mostre</h2></a>
	</div>
	<div class="col-lg-4 no-right-padding">
		<div class="extra-link">
		  <a href=""><h2>Extra</h2></a>
		</div>
		<div class="offerte-link">
		  <a href=""><h2>Offerte</h2></a>
		</div>
	</div>
	</div>
	<div class="row">
	<div class="tuttemostre-link col-lg-12">
	  <a href=""><h2>Tutte le mostre</h2></a>
	</div>
	</div>
</div>
<?php } 
else{?>


<div class="container land-cont">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<div class="log-cont">
				<div class="logo">
				  		<img src="<?php echo($url); ?>/images/fotorent_white.png" alt="logo">
				  	</div>

				<?php
				  //$form = drupal_get_form('user_register_form');
				$form=drupal_get_form('user_login_block');
				  print(drupal_render($form));

				  //print drupal_render($form);
				 ?>
				</div>
			</div>
	</div>
</div>
<div class="section2">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="boxes">
					<div class="box">
						<img src="<?php echo($url); ?>/images/2.png">
					</div>
					<div class="box">
						<img src="<?php echo($url); ?>/images/3.png">
					</div>
					<div class="box">
						<img src="<?php echo($url); ?>/images/4.png">
					</div>
					<div class="box">
						<img src="<?php echo($url); ?>/images/5.png">
					</div>
					<div class="box">
						<img src="<?php echo($url); ?>/images/6.png">
					</div>
					<div class="box">
						<img src="<?php echo($url); ?>/images/7.png">
					</div>
				</div>
			</div>
			<div class="col-md-4 offset-md-2">
				<p class="infotext">
					<strong>Noleggia</strong> le opere dei tuoi artisti preferiti
				</p>
			</div>
		</div>
	</div>
</div>
<div class="section2 second">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<p class="infotext">
					<strong>Esponi</strong> la tua mostra privata in casa, nella tua attività o nel tuo ufficio
				</p>
			</div>
		</div>
	</div>
</div>
<div class="section2 third">
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-8">
				<p class="infotext">
					<strong>Fotorent</strong> ti spedisce direttamente a casa le opere che hai scelto e ti aiuta ad allestire la tua mostra
				</p>
			</div>
		</div>
	</div>
</div>
<?php }?>