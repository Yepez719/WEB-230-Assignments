<?php



$food = array('Healthy'=>
                         array('Salad', 'Vegetables', 'Pasta'),
                         'Unhealthy'=>
                         array('Pizza', 'Ice cream', 'Popcorn'));

foreach($food as $element => $inner_array)
/* $food = $food, $element = 'Health' and 'Unhealthy' arrays, $item = the foods in
healthy / unhealthy array */
{
     echo '<strong>'.$element.'</strong><br>';
     foreach($inner_array as $item) {
          echo $item.'<br>';
     }

}

?>
