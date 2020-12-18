<?php include '../album.php' ?>
<!DOCTYPE html>
<html lang='en' dir='ltr'>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="../dist/app.js" charset="utf-8"></script>
        <link rel="stylesheet" href="../dist/app.css">
        <meta charset='utf-8'>
        <title>Platlist - PHP</title>
    </head>
    <body>
        <header>
            <h1>Platlist - PHP</h1>
            <select id="kind" name="">
                <option value="all">Tutti i generi</option>
                <?php
                foreach ($genres as $genre) { ?>
                    <option value="<?php echo $genre ?>"><?php echo $genre ?></option>

                    <?php
                } ?>

            </select>
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
        <script id="entry-template" type="text/x-handlebars-template">
            <div class="card">
                <img src="{{ poster }}" alt="">
                <h2>{{ title }}</h2>
                <h3>{{ author }}</h3>
                <p>{{ genre }}</p>
                <span>{{ year }}</span>
            </div>
        </script>
    </body>
</html>
