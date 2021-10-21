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

        <div class="content padding orange">
            <div class="container">

                <h2>Cola</h2>
                <br>
                <p>Cola is een koolzuurhoudende frisdrank. Het smaakt zoet (maar is qua pH zuur) en bevat circa 28-32 mg
                    cafeïne per 33 cl.[1] Andere belangrijke ingrediënten zijn vanille, kaneel, karamel en citroen.
                    Anders dan de meeste frisdranken bevat het geen citroenzuur, maar fosforzuur. Dieetcola bevat zowel
                    fosforzuur als citroenzuur. Er bestaan naast suikervrije ook cafeïnevrije colavarianten.</p>
                <br>
                <p>Link naar de pagina over
                <div class="isVerwijzing"><a href="<?php echo $base_url; ?>/pages/filmwereld/acteurs/roger-moore.php">Roger Moore</a>
                </div>
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
