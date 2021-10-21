<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../../css/main.css">
        <link rel="shortcut icon" href="../../../img/logo.ico">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+Mono">
        <script src="https://kit.fontawesome.com/1793fc5f13.js" crossorigin="anonymous"></script>
        <title>Homepagina</title>
    </head>
    <body>
        <?php include "../../../header.php" ?>

        <div class="content padding purple">
            <div class="container">

                <h2>Latte</h2>
                <br>
                <p>Een caffè latte of latte is een in veel Europese en Amerikaanse gelegenheden geserveerde koffiedrank,
                    gemaakt met espresso en warme melk. Vermoedelijk ligt de oorsprong in de Verenigde Staten, waar de
                    drank uitgevonden zou zijn om de espresso uit de opkomende koffiemachines wat te verzachten. In
                    Italie wordt de term niet of nauwelijks gebruikt. Wie latte bestelt, krijgt melk.

                    In veel Noord-Europese landen wordt het wel aangeduid als café au lait, die eveneens aan het eind
                    van de 20e eeuw zou zijn ontstaan., in Frankrijk als grand crème en in Duitsland als Milchkaffee.

                    Sommige barista's verstaan de kunst om de melk zodanig aan de koffie toe te voegen dat er ware
                    kunstwerkjes ontstaan. Deze techniek wordt latte art genoemd.</p>

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
