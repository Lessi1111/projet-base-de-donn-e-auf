<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/inscrire.css">
    <title>Document</title>
</head>

<body>
    <header>
        
        <div class="container">

            <div class="row">
                <div class="col-4">
                <img class="img" src="images/logo.jpg" alt="">
                </div>
                <div class="col-3" id="lien">
                <a href="./Authentification.php">CONNEXION</a>
                </div>
                <div class="col-1">
                    <a href="https://web.facebook.com/aufinternational?_rdc=1&_rdr"><img src="css/bootstrap-icons/facebook.svg" alt="lien-facebook"></a>
                </div>
                <div class="col-1">
                    <a href="https://www.youtube.com/user/planeteauf"><img src="css/bootstrap-icons/youtube.svg" alt="lien-youtube"></a>
                </div>
                <div class="col-1">
                    <a href="https://twitter.com/auf_org"><img src="css/bootstrap-icons/twitter.svg" alt="lien-twiter"></a>
                </div>
            </div>
        </div>
       

    </header>
    <main>
        <div class="container">
            <div class="row">

                <form action="" method="post">
                    <div class="row mt-4">
                        <div class="col-2">
                            <label class="form-label">NOM</label>
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control" name="nom">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label class="form-label">PRENOMS</label>
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control" name="prenom">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label class="form-label">Email</label>
                        </div>
                        <div class="col-5">
                            <input type="email" class="form-control" name="mail">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label class="form-label">MOT DE PASSE</label>
                        </div>
                        <div class="col-5">
                            <input type="password" class="form-control" name="mdp">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label class="form-label">CONFIRMER MOT DE PASSE</label>
                        </div>
                        <div class="col-5">
                            <input type="password" class="form-control" name="mdp2">
                        </div>
                    </div>
                    <button class="btn btn-danger mt-4" name="submit">S'INSCRIRE</button>
                </form>


            </div>
        </div>

    </main>


    <footer>
        <div class="container" id="pied">
            <div class="row">
                <div class="col-4">
                    <img src="images/logo.jpg" alt="logo-auf">
                    <h1>AGENCE UNIVERSITAIRE<br>
                        DE LA FRANCOPHONIE</h1>
                </div>
                <div class="col-6">
                    <a href="https://www.auf.org/a-propos/contact/">Contacts</a>
                    <a href="https://www.auf.org/mentions-legales/">Mentions légales</a>
                    <a href="https://www.auf.org/politique-de-confidentialite/">Politiques de confidentialités</a>
                </div>
            </div>

        </div>
        
    </footer>
    <div class="droit">
            <h2>AUF 2022 Tous droits réservés</h2>
        </div>

    <script rel="stylesheet" href="js/bootstrap.js"></script>
</body>

</html>



<?php

include("./index.php");

if (isset($_POST["submit"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $mdp = sha1($_POST["mdp"]);
    $mdp2 = sha1($_POST["mdp2"]);

    $query = "INSERT INTO `administrateur` (`NOM`, `PRENOMS`, `Email`, `MOT_DE_PASSE`) 
VALUES ('$nom', '$prenom', '$mail', '$mdp')";

    $result = mysqli_query($connection, $query);
    if ($mdp != $mdp2) {
        echo '<script language="javascript"> alert("mot de passe incorrect")</script>';
    } else {
        if ($result) {
            echo '<script language="javascript"> alert("Inscription reussie")</script>';
            
        } else {

            echo '<script language="javascript"> alert("Inscription echouée")</script>';
        }
    }
}
?>
