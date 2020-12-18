<?php include '../album.php' ?>
<!DOCTYPE html>
<html lang='en' dir='ltr'>
    <head>
        <link rel="stylesheet" href="../dist/app.css">
        <meta charset='utf-8'>
        <title>Platlist - PHP</title>
    </head>
    <body>
        <header>
            <h1>Platlist - PHP</h1>
        </header>
        <main>
            <div class="container">
                <div class="wrapper">
                    <?php foreach ($dischi as $disco) { ?>
                        <div class="card">
                            <img src="<?php echo $disco['poster'] ?>" alt="">
                            <h2><?php echo $disco['title'] ?> </h2>
                            <h3><?php echo $disco['author'] ?></h3>
                            <p><?php echo $disco['genre'] ?></p>
                            <span><?php echo $disco['year'] ?></span>
                        </div>
                        <?php
                    } ?>

                </div>
            </div>
        </main>
        <footer>
            <h2>copyright</h2>
        </footer>
    </body>
</html>
