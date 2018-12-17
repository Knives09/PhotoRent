<?php 
$mostre[0]="";
$x=0;
$y=0;
$views = views_get_view('opera_artista');
$views->execute();

foreach ($view->result as $key) {
  if($x==0){
    $mostre[0]=$key->field_field_mostra[0]['rendered']['#markup'];
    $x++;
  }
  else{
    if($key->field_field_mostra[0]['rendered']['#markup']==$mostre[$y]){
      continue;
    }
    else{
      $y++;
      $mostre[$y]=$key->field_field_mostra[0]['rendered']['#markup'];
    }
  }
}
foreach ($mostre as $key) {
  foreach ($views->result as $chiave) {
            if($chiave->field_field_mostra[0]['rendered']['#title']==$key){
              $img=file_create_url($chiave->field_field_gallery[0]['raw']['uri']);
              break;
            }
          }?>
  <div>
    <a href="http://fotorent.altervista.org/mostre?field_mostra_tid=<?php echo($key); ?>">
    <h3><?php echo($key); ?></h3>
    <img src="<?php echo($img); ?>" height="50" width="50">
    </a>
  </div>
<?php 
}
?>