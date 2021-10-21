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

        <div class="content padding purple">
            <div class="container">

                <h2>Koffie</h2>
                <br>
                <p>Koffie is een meestal warm genuttigde drank, die wordt bereid op basis van water en gedroogde en
                    gebrande pitten van de koffieplant (Coffea spp.) die vanwege hun vorm koffiebonen worden genoemd.
                    Koffie bevat het stimulerende middel cafeïne.[1][2] De meeste soorten in het geslacht Coffea komen
                    van nature voor in tropisch Afrika en op de eilanden in de Indische Oceaan. Ze vinden hun oorsprong
                    in Ethiopië, Jemen en Soedan.

                    De koffieboon is een belangrijk exportproduct van landen rondom de evenaar, zoals Brazilië, Vietnam
                    en Colombia. Koffieplanten worden vooral gecultiveerd op plantages in tropische landen, voor export
                    naar landen met een gematigd klimaat. Samen met kennis van de drank verspreidde de plant zich vanaf
                    de 15e eeuw uit tropisch Afrika naar Noord-Afrika, het Midden-Oosten en Europa. Sinds de 19e eeuw
                    bevinden de belangrijkste producenten en exporteurs van koffiebonen zich in de tropische gebieden
                    van Zuid- en Centraal-Amerika, Afrika en Azië. De meest geteelde soorten zijn Coffea arabica
                    (arabica) en C. canephora (robusta).</p>
                <br>
                <p>Link naar de pagina over
                <div class="isVerwijzing"><a href="<?php echo $base_url; ?>/pages/Films/georgeClooney.php">George
                        Clooney</a></div>
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
