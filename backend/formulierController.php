<?php
$action = $_POST['action'];

require_once 'conn.php';

if ($action == "create")
{
    $titel = $_POST['titel'];
    $auteur = $_POST['auteur'];
    $jaartal = $_POST['jaartal'];
    $pagina = $_POST['pagina'];
    $prijs = $_POST['prijs'];
    $beschrijving = $_POST['beschrijving'];


    //2. Query
    $query = "INSERT INTO boeken (titel, auteur, jaartal, pagina, prijs, beschrijving) 
	VALUES (:titel, :auteur, :jaartal, :pagina, :prijs, :beschrijving)";
    //3. Prepare
    $statement = $conn ->prepare($query);
    //4. Execute
    $statement -> Execute([
        ":titel" => $titel,
        ":auteur" => $auteur,
        ":jaartal" => $jaartal,
        ":pagina" => $pagina,
        ":prijs" => $prijs,
        ":beschrijving" => $beschrijving,

    ]);


    header("Location: ../admin/boeken.php?msg=Boek Opgeslagen");
}

if ($action == "update")
{
    $titel = $_POST['titel'];
    $auteur = $_POST['auteur'];
    $jaartal = $_POST['jaartal'];
    $pagina = $_POST['pagina'];
    $prijs = $_POST['prijs'];
    $beschrijving = $_POST['beschrijving'];
    $id = $_POST['id'];

    $query = "UPDATE boeken SET titel = :titel, auteur = :auteur, jaartal = :jaartal, pagina = :pagina, prijs = :prijs, beschrijving = :beschrijving WHERE id = :id";
    $statement = $conn ->prepare($query);
    $statement -> execute([
        ":titel" => $titel,
        ":auteur" => $auteur,
        ":jaartal" => $jaartal,
        ":pagina" => $pagina,
        ":prijs" => $prijs,
        ":beschrijving" => $beschrijving,
        "id" => $id
    ]);

    header("Location: ../admin/boeken.php?msg=Boek Bewerkt");
}

if ($action == "delete")
{
    $id = $_POST['id'];

    $query = "DELETE FROM boeken WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement-> Execute([":id" =>$id]);

    header("Location: ../admin/boeken.php?msg=Boek Verwijderd");
}