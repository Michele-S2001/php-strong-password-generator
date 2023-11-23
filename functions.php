<?php

function getRandomPassword($passLength) {
  $random_pass = "";

  while(strlen($random_pass) < $passLength) {
    $upper_case_letter = chr(rand(65, 90));
    $lower_case_letter = chr(rand(97, 122));
    $random_symbol = chr(rand(33, 38));
    $random_num = rand(1, 9);
    $random_pass .= $upper_case_letter;
    $random_pass .= $random_num;
    $random_pass .= $lower_case_letter;
    $random_pass .= $random_symbol;
  }
  
  $final_pass = str_shuffle(substr($random_pass, 0, $passLength));

  return $final_pass;
}