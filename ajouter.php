<?php 

include("./index.php");

if (isset($_POST["submit"])){
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$date_naissance = $_POST["naissance"];
$mail = $_POST["mail"];
$numb = $_POST["numb"];
$date = $_POST["debut"];

$query = "INSERT INTO `abonnes_auf` (`NOM`, `PRENOM`, `DATE_NAISSANCE`, `Email`, `NUMERO`, `DATE_DEBUT_D`) 
VALUES ('$nom', '$prenom', '$date_naissance', '$mail', '$numb', '$date')";

$resultat = mysqli_query($connection, $query);
}


if ($resultat) {
    echo '<script language="javascript"> alert("Abonnée ajouté avec succès")</script>';
}
else{
    echo '<script language="javascript"> alert("Abonné non ajouté")</script>';
}



?>