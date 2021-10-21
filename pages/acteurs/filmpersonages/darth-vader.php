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

        <div class="content padding yellow">
            <div class="container">

                <h2>Darth Vader</h2>
                <p><br></p>
                <p>Darth Vader is een personage uit de Star Wars-films. Hij is als Sith-leerling ondergeschikt aan
                    keizer Palpatine, ook bekend als Darth Sidious.

                    In de jaren 1977, 1980 en 1983 werd Darth Vader gespeeld door acteur David Prowse en stuntman Bob
                    Anderson. Zijn stem werd echter ingesproken door James Earl Jones, omdat diens stem veel zwaarder,
                    duisterder en dreigender klonk.Darth Vader is een dienaar van de kwaadaardige keizer Palpatine
                    (Darth Sidious) en een wreed persoon. Hij is vooral te herkennen aan zijn donkere kostuum, zijn
                    zware stem, en zijn enorme omvang. Hij wordt zowel gevreesd door de Rebellen, als door zijn eigen
                    troepen.</p>


                <button class="btnBack" onclick="goBack()">Ga Terug</button>
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
