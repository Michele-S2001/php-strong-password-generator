<?php 
include './start_session.php';

$password = $_SESSION['password'];

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
    <div class="col-auto">
      <p>Password: <?php echo $password ?></p>
    </div>
  </div>
 </div>
</body>
</html>