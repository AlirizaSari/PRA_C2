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
        <?php include "../header.php" ?>

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

                <?php if(isset($_GET['msg']))
                {
                    echo "<div class='msg'>" . $_GET['msg'] . "</div>";
                } ?>

                <?php
                    //Query uitvoeren:
                    require_once '../backend/conn.php';
                    $query = "SELECT * FROM boeken";
                    $statement = $conn->prepare($query);
                    $statement->execute();
                    $boeken = $statement->fetchAll(PDO::FETCH_ASSOC);
                ?>

                <p><br></p>
                
                <table>
                    <tr>
                        <th>Titel</th>
                        <th>Auteur</th>
                        <th>Jaartal</th>
                        <th>Pagina's</th>
                        <th>Prijs</th>
                    </tr>
                    <?php foreach($boeken as $boek): ?>
                        <tr>
                            <td><?php echo $boek['titel']; ?></td>
                            <td><?php echo $boek['auteur']; ?></td>
                            <td><?php echo $boek['jaartal']; ?></td>
                            <td><?php echo $boek['pagina']; ?></td>
                            <td>€<?php echo $boek['prijs']; ?></td>
                            <td><a href="<?php echo $base_url ?>/tasks/edit.php?id=<?php echo $boek['id']; ?>"><i class="fas fa-edit"></i></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>


        <?php include "../footer.php" ?>
    </body>
</html>
