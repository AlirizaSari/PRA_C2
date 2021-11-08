<?php
$action = $_POST['action'];

if ($action == "create")
{
    $titel = $_POST['titel'];
    $auteur = $_POST['auteur'];
    $jaartal = $_POST['jaartal'];
    $pagina = $_POST['pagina'];
    $prijs = $_POST['prijs'];

    //1. Verbinding
    require_once 'conn.php';

    //2. Query
    $query = "INSERT INTO boeken (titel, auteur, jaartal, pagina, prijs) 
	VALUES (:titel, :auteur, :jaartal, :pagina, :prijs)";
    //3. Prepare
    $statement = $conn ->prepare($query);
    //4. Execute
    $statement -> Execute([
        ":titel" => $titel,
        ":auteur" => $auteur,
        ":jaartal" => $jaartal,
        ":pagina" => $pagina,
        ":prijs" => $prijs,

    ]);


    header("Location: ../pages/informatie/boeken.php?msg=Boek Opgeslagen");
}

if ($action == "update")
{
    $titel = $_POST['titel'];
    $auteur = $_POST['auteur'];
    $jaartal = $_POST['jaartal'];
    $pagina = $_POST['pagina'];
    $prijs = $_POST['prijs'];
    $id = $_POST['id'];

    require_once 'conn.php';
    $query = "UPDATE boeken SET titel = :titel, auteur = :auteur, jaartal = :jaartal, pagina = :pagina, prijs = :prijs WHERE id = :id";
    $statement = $conn ->prepare($query);
    $statement -> Execute([
        ":titel" => $titel,
        ":auteur" => $auteur,
        ":jaartal" => $jaartal,
        ":pagina" => $pagina,
        ":prijs" => $prijs,
        "id" => $id
    ]);

    header("Location: ../pages/informatie/boeken.php?msg=Boek Bewerkt");
}

if ($action == "delete")
{
    $id = $_POST['id'];

    require_once 'conn.php';
    $query = "DELETE FROM boeken WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement-> Execute([":id" =>$id]);

    header("Location: ../pages/informatie/boeken.php?msg=Boek Verwijderd");
}