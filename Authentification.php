<?php
session_start();

include ("./index.php");
 if (isset($_POST['conect'])){
 $mailconnect = htmlspecialchars($_POST['nombre-1']);
 $mdpconnect = ($_POST['nombre-2']);

 if (!empty($mailconnect) AND !empty($mdpconnect)){
 $admin = "SELECT * FROM Administrateur WHERE Email = '$mailconnect' AND MOT_DE_PASSE = '$mdpconnect'";
 $result = mysqli_query($connection,$admin);
 $row = mysqli_num_rows($result);
 
 if ($row > '0'){
     $_SESSION['NOM'] = $nom;
     $_SESSION['PRENOMS'] = $prenom;
    header("location: enregistrement.php");
 }
 else {
     echo "Mauvais Email ou mot de passe";
 }
 }
else {
   
}


 }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
        <div class="img col-md-12 col-sm-12">
            <img src="images/img.jpg" alt="">
        </div>
    </div>
    </div>
        <div class="container">
            <div class="row">
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
        <div class="text">
            <h1>LETRRE D'INFORMATION</h1>
            <P>Enregistrez  les abonnés pour qu'ils reçoivent les<br> lettres d'information mensuelles de l'AUF</P>
        </div>

    </header>
    <main>
        <div class="container">

            <form action="./Authentification.php" method="post">
                <div class="row mt-4">
                    <div class="col-2">
                        <label class="form-label">Email</label>
                    </div>
                    <div class="col-5">
                        <input type="email" class="form-control" name="nombre-1">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label class="form-label">MOT DE PASSE</label>
                    </div>
                    <div class="col-5">
                        <input type="password" class="form-control" name="nombre-2">
                    </div>
                </div>
                <button type="submit" class="btn btn-danger mt-4" name="conect">CONNECTION</button>
            </form>
        </div>
        </div>
    </main>
  

    <footer>
        <div class="container">
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
    <div class="">
            <h2>AUF 2022 Tous droits réservés</h2>
        </div>

    <script rel="stylesheet" href="js/bootstrap.js"></script>
</body>

</html>