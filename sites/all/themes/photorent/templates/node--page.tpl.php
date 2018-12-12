<?php 
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
function output_taxonomy_nested_tree($tree,$node) {
  if($node->title=="Artisti"){
    if (count($tree)) {
        $output = '<ul class="taxonomy-tree">';
        foreach ($tree as $term) {
            $output .= '<li class="taxonomy-term"><a href="http://fotorent.altervista.org/mostre?field_artista_tid='.$term->tid.'">';
            $output .= $term->name;
            $output .= '</a></li>';
        }
        $output .= '</ul>';
    }
  }
  else {
     if (count($tree)) {
        $output = '<ul class="taxonomy-tree">';
        foreach ($tree as $term) {
            $output .= '<li class="taxonomy-term"><a href="http://fotorent.altervista.org/mostre?field_categorie_tid%5B%5D='.$term->tid.'">';
            $output .= $term->name;
            $output .= '</a></li>';
        }
        $output .= '</ul>';
    }

  }
    return $output;
  
}?>

<?php
if($node->title=="Artisti"){
$tree= taxonomy_get_nested_tree(2,10);
$output=output_taxonomy_nested_tree($tree,$node);
echo $output;
}else{
  $tree= taxonomy_get_nested_tree(1,10);
$output=output_taxonomy_nested_tree($tree,$node);
echo $output;
}

