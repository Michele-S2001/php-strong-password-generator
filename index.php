<?php 
include __DIR__ . '\functions.php';

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
    <p><?= getRandomPassword($pass_length) ?></p>
  <?php } else { ?>
    <p>Inserire numero maggiore di 0 !</p>
  <?php } ?>
</body>
</html>