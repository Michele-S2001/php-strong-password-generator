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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-black pt-4" style="color: white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-auto text-center">
        <h3 class="mb-4">Genera una password random</h3>
        <!-- form -->
        <form class="mb-2 d-flex gap-2" action="" method="get">
          <input class="form-control" name="pass_length" type="text" placeholder="Inserire lunghezza password">
          <button class="btn btn-primary" type="submit">Genera</button>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <?php if($int_pass_length > 0) { ?>
          <p class="text-break"><?= getRandomPassword($pass_length) ?></p>
        <?php } else { ?>
          <p>Inserire numero maggiore di 0 !</p>
        <?php } ?>
      </div>
    </div>
  </div>
</body>
</html>