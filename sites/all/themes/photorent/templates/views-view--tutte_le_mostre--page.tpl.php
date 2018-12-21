<?php 
global $base_url;
$mostre[0]="";
$x=0;
$y=0;
$views = views_get_view('opera_artista');
$views->execute();

$artista=$_GET['field_artista_tid'];
$categoria=$_GET['field_categorie_tid'];

if($categoria!=""){
  echo("<h2>".$categoria."</h2>");
}
if($artista!=""){
  echo ("<h2>".$artista."</h2>");
}

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
echo('<div class="box-mostre">');
foreach ($mostre as $key) {
  foreach ($views->result as $chiave) {
            if($chiave->field_field_mostra[0]['rendered']['#title']==$key){
              $img=file_create_url($chiave->field_field_gallery[0]['raw']['uri']);
              break;
            }
          }?>
  
    <a href="<?php echo($base_url);?>/mostre?field_mostra_tid=<?php echo($key); ?>">
    <h3><?php echo($key); ?></h3>
    <img src="<?php echo($img); ?>" height="50" width="50">
    </a>
  
<?php 
}
?>
</div>