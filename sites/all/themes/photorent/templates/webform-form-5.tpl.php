<div class="container">
	<div class="row">
		<div class="form-opere col-md-12 col-lg-12">
			<p class="title-opere">Inviaci le tue opere</p>
			<ul>
				<li>
				    <?php print drupal_render($form['submitted']['nome']); ?>
				</li><li>
				    <?php print drupal_render($form['submitted']['cognome']); ?>
				</li><li>
				    <?php print drupal_render($form['submitted']['mail']); ?>
				</li><li>
				    <?php print drupal_render($form['submitted']['telefono']); ?>
				</li><li>
				    <?php print drupal_render($form['submitted']['opere']); ?>
				</li><li>
				    <?php print drupal_render($form['submitted']['privacy']); ?>
				</li>
			</ul>
		</div>
	</div>
</div>