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
    <title>Edit boek</title>
</head>
<body>
    <?php 
    require_once('../header.php');
    ?>

    <div class="form">
        <h2>Boek aanpassen</h2>

        <?php
        $id = $_GET['id'];

        require_once '../backend/conn.php';
        $query = "SELECT * FROM boeken WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->execute([":id" => $id]);
        $boek = $statement->fetch(PDO::FETCH_ASSOC);
        ?>

        <form action="../backend/formulierController.php" method="POST">
            <input type="hidden" name="action" value="update">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-input">
                <input type="text" name="titel" id="titel" placeholder="Titel" value="<?php echo $boek['titel']; ?>">
            </div>
            <div class="form-input">
                <input type="text" name="auteur" id="auteur" placeholder="Auteur" value="<?php echo $boek['auteur']; ?>">
            </div>
            <div class="form-input">
                <textarea name="beschrijving"<?php echo $boek['beschrijving']; ?> id="beschrijving" placeholder="Beschrijving" cols="35" rows="5"></textarea>
            </div>
            <div class="form-input">
                <input type="text" name="jaartal" id="jaartal" placeholder="Jaartal" value="<?php echo $boek['jaartal']; ?>">
            </div>
            <div class="form-input">
                <input type="number" name="pagina" id="pagina" placeholder="Pagina's" value="<?php echo $boek['pagina']; ?>">
            </div>
            <div class="form-input">
                <input type="text" name="prijs" id="prijs" placeholder="Prijs" value="<?php echo $boek['prijs']; ?>">
            </div>

            <div class="form-group">
				<input type="submit" value="Opslaan">
			</div>
        </form>
        <hr>
        <form action="../backend/formulierController.php" method="POST">
            <input type="hidden" name="action" value="delete">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <input type="submit" value="Verwijderen">
            </div>
        </form>
    </div>
    <div class="pushPage"></div>
    <?php 
    require_once('../footer.php');
    ?>

</body>
</html>