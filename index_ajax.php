<?php include 'database2.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
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

            </div>
        </main>

        <script id="entry-template" type="text/x-handlebars-template">
            <div class="card">
                <img src="{{ poster}}"/>
                <h3>{{ title }}</h3>
                <small>{{ author }}</small>
                <strong>{{ year }}</strong>
            </div>
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="dist/app.js" charset="utf-8"></script>

    </body>
</html>
