<?php
//variables
$number = 10;

$canbe1 = 2;
$canbe2 = 4;
/*If the variable $number is equal to either 2 or 4, which its equal to
10, then its not ok to pass. But if its a number besides 2 or 4 then its ok to pass.
It is like $number is the security guard and it can't allow two specific
individuals to pass. In this situation it is 2 and 4. 10 is cool though,
she can pass.*/
if (!($number == $canbe1) && !($number == $canbe2))
{
     echo 'Ok.';
}
else
{
     echo 'Not ok.';
}




 ?>
