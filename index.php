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


$pass_length = $_GET['pass_length'] ?? -1;
$int_pass_length = intval($pass_length);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
</head>
<body>
  
  <h3>Genera una password random</h3>
  <!-- form -->
  <form action="" method="get">
    <input name="pass_length" type="text" placeholder="Inserire lunghezza password">
    <button type="submit">Genera</button>
  </form>

  <?php if($int_pass_length > 0) { ?>
    <p><?= getRandomPassword($int_pass_length) ?></p>
  <?php } else { ?>
    <p>Inserire numero maggiore di 0 !</p>
  <?php } ?>
</body>
</html>