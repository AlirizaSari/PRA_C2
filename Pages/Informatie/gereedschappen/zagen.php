<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../../css/main.css">
        <link rel="shortcut icon" href="../../../img/logo.ico">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+Mono">
        <title>Homepagina</title>
    </head>
    <body>
        <?php include "../../../header.php" ?>

        <div class="content padding">
            <div class="container">

                <h2>Zagen</h2>
                <br>
                <p>Hier is de lijst met zagen:</p>
                <br>
                <p>
                <ul>
                    <li><a href="zagen/kettingzagen.php">Kettingzagen</a></li>
                    <li><a href="zagen/handzagen.php">Handzagen</a></li>
                    <li><a href="zagen/cirkelzagen.php">Cirkelzagen</a></li>
                </ul>
                </p>

                <button class="btnBack2" onclick="goBack()">Ga Terug</button>

            </div>
        </div>

        <script>
            function goBack() {
                window.history.back()
            }
        </script>

        <?php include "../../../footer.php" ?>
    </body>
</html>
