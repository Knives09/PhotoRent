<div class="container">
  <div class="row">
    <div class="form-opere col-md-12 col-lg-12">
      <p class="title-opere">Inviaci le tue opere</p>
      <ul>
        <li>
            <?php print drupal_render($form['submitted']['nome_artista_e_didascalia']); ?>
        </li><li>
            <?php print drupal_render($form['submitted']['allestimento_da_fotorent']); ?>
        </li>
        </li>
        <li> <?php print drupal_render($form['actions']); ?></li>
      </ul>
    </div>
  </div>
</div>
