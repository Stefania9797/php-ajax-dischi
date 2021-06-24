<?php 
require __DIR__ . '/database/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Dischi</title>
    <link rel="stylesheet" href="./dist/css/app.css">
</head>
<body>
    <header>
        <img src="./dist/img/logo-small.svg" alt="">
    </header>
    <div class="container">
    <?php foreach ($albums as $album) { ?>
        <div class="card">
            <div class="cover">
            <img src="<?= $album["poster"]; ?>" alt="">
            </div>
            <div class="info">
                    
                <h3><?= $album["title"] ?></h3>
                <h5><?= $album["author"] ?></h5>
                <h5><?= $album["year"] ?></h5>
            </div>
        </div>
                <?php
                } 
            ?>
    </div>
</body>
</html>