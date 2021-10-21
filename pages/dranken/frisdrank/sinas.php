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

        <div class="content padding orange">
            <div class="container">

                <h2>Sinas</h2>
                <br>
                <p>Sinas is in Nederland de benaming voor de doorgaans gele of oranje, meestal koolzuurhoudende
                    frisdrank met sinaasappelsmaak. Zoals de meeste frisdranken bevat sinas veel suiker of in de
                    light-versie kunstmatige zoetstoffen. Het gehalte aan sinaasappelsap bedraagt ten minste 4%. Bekende
                    merken zijn Fanta (van de Coca-Cola Company) en Sisi (Vrumona); Orangina onderscheidt zich doordat
                    er werkelijk vruchtvlees in zit.</p>

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
