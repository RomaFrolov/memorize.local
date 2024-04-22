<?php


namespace myfrm;
// $rand_post = [];
// $number = count($card);
// $rand_post = array_rand($card, $number);

// if (isset($_POST['random_count'])) {
//   $number = ($_POST['random_count']);
//   $rand_post = array_rand($card, $number);
// }
class Random
{
 public $random_post = [];
 public $number;

public function getRandom($card,$number){
return array_rand($card,$number);
}
  
}
