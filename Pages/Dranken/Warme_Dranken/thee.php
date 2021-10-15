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
    <?php include "../../../header.php"?>

    <div class="content padding">
        <div class="container">
    
            <h2>Thee</h2>
            <br>
            <p>Thee is een warme drank die wordt gemaakt door infusie van de gedroogde bladeren van de theeplant Camellia sinensis. Alle als thee verkochte producten die niet van deze plant afkomstig zijn (bijvoorbeeld kamillethee of rooibos), zijn dan ook geen echte thee maar kruidenthee.

De naam thee komt waarschijnlijk uit het Chinese dialect Minnanyu.</p>

            <button class="btnBack2" onclick="goBack()">Ga Terug</button>

        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    <?php include "../../../footer.php"?>
</body>
</html>