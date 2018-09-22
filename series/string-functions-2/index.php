<?php

$string = 'abcdefghijklmnop0123456789';
$string_shuffled = str_shuffle($string);

$half = substr($string_shuffled, 0, strlen($string)/2);

echo $half;




 ?>
