<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="../img/logo.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+Mono">
    <script src="https://kit.fontawesome.com/1793fc5f13.js" crossorigin="anonymous"></script>
    <title>Create boek</title>
</head>
<body>
    <?php 
    require_once('../header.php');
    ?>

    <div class="form">
        <form action="../backend/formulierController"></form>
        <div class="form-input">
            <label for="titel">Titel: </label>
            <input type="text" name="boekNaam" id="boekNaam">
        </div>
        <div class="form-input">
            <label for="auteur">Auteur: </label>
            <input type="text" name="auteur" id="auteur">
        </div>
        <div class="form-input">
            <label for="auteur">Jaartal: </label>
            <input type="text" name="jaartal" id="jaartal">
        </div>
        <div class="form-input">
            <label for="paginas">Pagina's: </label>
            <input type="number" name="pagina" id="pagina">
        </div>
    </div>

    <?php 
    require_once('../footer.php');
    ?>

</body>
</html>