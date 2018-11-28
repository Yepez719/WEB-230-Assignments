<?php

if (isset($_GET['user_name'])&&!empty($_GET['user_name'])){
      $user_name = $_GET['user_name'];
      $user_name_lc = strtolower ($user_name);
      //Makes it taco time all the time//
      if ($user_name_lc=='jose'){
           echo 'It  is taco time, '.$user_name;
      }
}


 ?>

<form action="index.php" method="GET">
     Name: <input type="text" name="user_name"><br><br>
     <input type="submit" value="Submit">
</form>
