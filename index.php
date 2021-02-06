<!-- includo il database -->
<?php require __DIR__."/book.php" ?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <title>php-oop-1</title>
</head>

<body>
  <?php var_dump($books); ?>
  <h1>php-oop-1</h1>
  <div class="container">
    <?php foreach ($books as $key => $value): ?>
      <div class="book">
        <h3><?= $value->title; ?></h3>
        <h4><?= $value->author; ?></h4>
        <h5><?= $value->author; ?></h5>
        <h5><?= $value->author; ?></h5>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>