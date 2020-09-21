<?php include 'database2.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="dist/app.css">
        <title>Php Dischi</title>
    </head>
    <body>
        <header>
            <div class="container_header">
                <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
            </div>
        </header>
        <main>
            <div class="container_cards">
                <?php foreach ($database as $cd) { ?>
                  <div class="card">
                    <img src="<?= $cd['poster']; ?>" />
                    <h3><?= $cd['title'] ?></h3>
                    <small><?= $cd['author']; ?></small>
                    <strong><?= $cd['year']; ?></strong>
                  </div>
                <?php } ?>
            </div>
        </main>
    </body>
</html>
