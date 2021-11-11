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
        <h2>Nieuw boek</h2>
        <form action="../backend/formulierController.php" method="POST">
            <input type="hidden" name="action" value="create">

            <div class="form-input">
                <input type="text" name="titel" id="titel" placeholder="Titel">
            </div>
            <div class="form-input">
                <input type="text" name="auteur" id="auteur" placeholder="Auteur">
            </div>
            <div class="form-input">
                <input type="text" name="jaartal" id="jaartal" placeholder="Jaartal">
            </div>
            <div class="form-input">
                <input type="number" name="pagina" id="pagina" placeholder="Pagina's">
            </div>
            <div class="form-input">
                <input type="text" name="prijs" id="prijs" placeholder="Prijs">
            </div>

            <div class="form-group">
				<input type="submit" value="Opslaan">
			</div>
        </form>
    </div>

    <?php 
    require_once('../footer.php');
    ?>

</body>
</html>