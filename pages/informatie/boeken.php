<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="shortcut icon" href="../../img/logo.ico">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+Mono">
        <script src="https://kit.fontawesome.com/1793fc5f13.js" crossorigin="anonymous"></script>
        <title>Homepagina</title>
    </head>
    <body>
        <?php include "../../header.php" ?>

        <div class="content padding">
            <div class="container">

                <h2>Boeken</h2>
                <p>
                    Een boek in traditionele zin is een samengevoegde hoeveelheid papier met tekst, afbeeldingen of
                    allebei. Daarnaast wordt met de term de betreffende informatie, of een soortgelijke verzameling
                    informatie, aangeduid ('een boek schrijven', 'een boek downloaden').
                    Het woord 'boek' is vermoedelijk afkomstig van het Germaanse woord voor beuk, boche. De omslagen van
                    de eerste boeken werden namelijk gemaakt van een rechthoekig stuk (beuken)hout. Het Griekse woord
                    biblia (boeken) is het meervoud van biblion dat oorspronkelijk 'papyrusje' betekende, het materiaal
                    waarop in de oudheid meestal werd geschreven, en later werd gebruikt als aanduiding van papier,
                    geschrift en boek(rol).

                </p>
                <p><br></p>

                <h4>Boekenlijst</h4>
                <div class="bookStart">
                    <a href="<?php echo $base_url ?>/tasks/create.php">Voeg boek toe</a>
                </div>

                <p><br></p>
                
                <table>
                    <tr>
                        <th>Titel</th>
                        <th>Auteur</th>
                        <th>Jaartal</th>
                        <th>Pagina's</th>
                    </tr>
                    <tr>
                        <td>Info 1</td>
                        <td>Info 2</td>
                        <td>Info 3</td>
                        <td>Info 4</td>
                    </tr>
                </table>            
                


            </div>
        </div>


        <?php include "../../footer.php" ?>
    </body>
</html>
