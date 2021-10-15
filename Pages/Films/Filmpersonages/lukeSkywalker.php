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

    <div class="content padding green">
        <div class="container">
    
            <h2>Luke Skywalker</h2>
            <p><br></p>
            <p>
            Luke Skywalker is een personage uit de Star Wars saga, gespeeld door acteur Mark Hamill. Luke is de tweelingbroer van prinses Leia. Hun ouders zijn Padmé Amidala en Anakin Skywalker. Skywalker werd opgevoed door zijn oom Owen Lars en tante Beru Whitesun Lars.
            </p>

            <button class="btnBack" onclick="goBack()">Ga Terug</button>
            
    </div>


    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    <?php include "../../../footer.php"?>
</body>
</html>