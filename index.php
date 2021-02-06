<!-- includo il database -->
<?php require __DIR__."/book.php" ?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-1</title>
  <!-- font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h1>php-oop-1</h1>
  <?php var_dump($books); ?>
</body>
</html>