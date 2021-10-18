<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <link rel="shortcut icon" href="img/logo.ico">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+Mono">
        <title>Homepagina</title>
    </head>
    <body onload="display_c()" ;>
        <?php include "header.php" ?>

        <div class="container contBody pushUp">
            <div class="hero-image">
                <h2 id="time"></h2>
                <br>
                <h2 id="date"></h2>
            </div>

        </div>

        <?php include "footer.php" ?>

        <script>
            function display_c() {
                var refresh = 1000 // Refresh rate in milli seconds
                mytime = setTimeout('display_time()', refresh)
                mytime = setTimeout('display_date()', refresh)
            }

            function display_time() {
                var x = new Date()
                var x1 = x.getHours() + ":" + x.getMinutes() + ":" + x.getSeconds()
                document.getElementById('time').innerHTML = x1
                display_c()
            }

            function display_date() {
                var x = new Date()
                x1 = x.getDate() + "-" + x.getMonth() + "-" + x.getFullYear()
                document.getElementById('date').innerHTML = x1
                display_c()
            }
        </script>
    </body>
</html>
