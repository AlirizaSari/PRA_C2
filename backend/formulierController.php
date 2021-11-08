<?php
$action = $_POST['action'];

if ($action == "create")
{
    $titel = $_POST['titel'];
    $auteur = $_POST['auteur'];
    $jaartal = $_POST['jaartal'];
    $pagina = $_POST['pagina'];

    //1. Verbinding
    require_once 'conn.php';

    //2. Query
    $query = "INSERT INTO boeken (titel, auteur, jaartal, pagina) 
	VALUES (:titel, :auteur, :jaartal, :pagina)";
    //3. Prepare
    $statement = $conn ->prepare($query);
    //4. Execute
    $statement -> Execute([
        ":titel" => $titel,
        ":auteur" => $auteur,
        ":jaartal" => $jaartal,
        ":pagina" => $pagina,
    ]);


    header("Location: ../pages/informatie/boeken.php?msg=Boek opgeslagen");
}
