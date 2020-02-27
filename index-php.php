<?php
  include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="dist/app.css">
  <title>Document</title>
</head>

<body>

  <header>
    <div class="container">
      <img class="logo" src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
    </div>
  </header>

  <main>
    <div class="container">

      <?php if (!empty($database)) { ?>
        <div class="cds">
          <?php foreach ($database as $cd) { ?>
            <div class="cd">
              <img class="cd-image" src="<?php echo $cd['poster'] ?>" alt="">
              <h2 class="cd-title"><?php echo $cd['title'] ?></h2>
              <h3 class="cd-author"><?php echo $cd['author'] ?></h3>
              <small class="cd-date"><?php echo $cd['year'] ?></small>
            </div>
          <?php } ?>
        </div>
        <?php } else { ?>
            <h2>Non ci sono CD</h2>
        <?php } ?>

    </div>
  </main>

  <script src="dist/app.js"></script>
</body>

</html>