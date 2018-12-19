<?php 
$view = views_get_view('opera_artista');
$view->execute();

echo("<h1>".$node->title."</h1>"); 
if(isset($node->body['und'][0]['safe_value'])){
echo($node->body['und'][0]['safe_value']);
 }

function taxonomy_get_nested_tree($terms = array(), $max_depth = NULL, $parent = 0, $parents_index = array(), $depth = 0) {
  if (is_int($terms)) {
    $terms = taxonomy_get_tree($terms);
  }

  foreach($terms as $term) {
    foreach($term->parents as $term_parent) {
      if ($term_parent == $parent) {
        $return[$term->tid] = $term;
      }
      else {
        $parents_index[$term_parent][$term->tid] = $term;
      }
    }
  }

  foreach($return as &$term) {
    if (isset($parents_index[$term->tid]) && (is_null($max_depth) || $depth < $max_depth)) {
      $term->children = taxonomy_get_nested_tree($parents_index[$term->tid], $max_depth, $term->tid, $parents_index, $depth + 1);
    }
  }

  return $return;
}
function output_taxonomy_nested_tree($tree,$node,$view) {
  if($node=="Artisti"){
    if (count($tree)) {
        $output = '<ul class="taxonomy-tree">';
        foreach ($tree as $term) {
          foreach ($view->result as $key) {
            if($key->field_field_artista[0]['rendered']['#title']==$term->name){
              $img=file_create_url($key->field_field_gallery[0]['raw']['uri']);
              break;
            }
          }
            $output .= '<a href="http://localhost/PhotoRent/tutte-le-mostre?field_categorie_tid=&field_artista_tid='.$term->name.'">';
            $output .= '<h3>';
            $output .= $term->name;
            $output .= '</h3>';
            $output .= '<img src="'.$img.'" alt="Smiley face" height="50" width="50">';
            $output .= '</a>';
        }
        $output .= '</ul>';
    }
  }
  else {
     if (count($tree)) {
        $output = '<ul class="taxonomy-tree">';
        foreach ($tree as $term) {
          foreach ($view->result as $key) {
            if($key->field_field_categorie[0]['rendered']['#title']==$term->name){
              $img=file_create_url($key->field_field_gallery[0]['raw']['uri']);
              break;
            }
          }
            $output .= '<a href="http://localhost/PhotoRent/tutte-le-mostre?field_categorie_tid='.$term->name.'&field_artista_tid=">';
            $output .= '<h3>';
            $output .= $term->name;
            $output .= '</h3>';
             $output .= '<img src="'.$img.'" alt="Smiley face" height="50" width="50">';
            $output .= '</a>';
        }
        $output .= '</ul>';
    }

  }
    return $output;
  
}?>

<div class="home-mostre">
  <div class="tab-select">
    <a href="" class="tablinks active">Topics</a>
    <a href="" class="tablinks">Artisti</a>
  </div>

  <!-- Tab content -->
  <div id="Artisti" class="tabcontent not-vis">
  <?php 
  $tree= taxonomy_get_nested_tree(2,10);
  $output=output_taxonomy_nested_tree($tree,"Artisti",$view);
  echo $output;
  ?>
  </div>
  <div id="Categorie" class="tabcontent">
  <?php 
  $tree= taxonomy_get_nested_tree(1,10);
  $output=output_taxonomy_nested_tree($tree,"Mostre",$view);
  echo $output;
  ?>
  </div>
</div>