<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/liste.css">
  <title>Document</title>
</head> 
<body>
<header>
        <nav>

            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <img src="images/logo.jpg" alt="logo-auf">
                    </div>
                    <div class="col-3">
                        <a href="enregistrement.php">ENREGISTRER</a>
                    </div>
                   
                </div>
            </div>
        </nav>
    </header>
<main>

<h1 style="margin-left: 450px;font-size: 25px;">LISTE DES ABONNES</h1>
<div class="container">
    <div class="row">
   <?php
   include ("./index.php");
   $sql = "SELECT * FROM abonnes_auf";
   $resultat = mysqli_query($connection,$sql) or die ("bad query");

   echo "<table border='1'>";
   echo "<tr><td><b>ID</b></td> <td><b>NOM</b></td> <td> <b>PRENOM</b></td> <td> <b>DATE_NAISSANCE</b></td> <td> <b>Email</b></td> <td> <b>NUMERO</b></td> <td> <b>DATE_DEBUT_D</b></td> </tr>\n";
   while ($row=mysqli_fetch_assoc($resultat)){
       echo " <tr><td>{$row['ID']}</td><td>{$row['NOM']}</td><td>{$row['PRENOM']}</td><td>{$row['DATE_NAISSANCE']}</td><td>{$row['Email']}</td><td>{$row['NUMERO']}</td><td>{$row['DATE_DEBUT_D']}</td></tr>\n";
   }
   echo "</table>";
  

   
   
   ?>

</div>
</div>






</main>

<footer>
    <div class="pied">
        <div class="bloc">
            <div class="ligne">
                <a href="https://web.facebook.com/aufinternational?_rdc=1&_rdr"><img src="css/bootstrap-icons/facebook.svg" alt="lien-facebook"></a>
                <a href="https://www.youtube.com/user/planeteauf" style="margin-left: 15px;"><img src="css/bootstrap-icons/youtube.svg"
                        alt="lien-youtube"></a>
            </div>
            <a href="https://twitter.com/auf_org"><img src="css/bootstrap-icons/twitter.svg" alt="lien-twiter"></a>
        </div>

        <div class="lien">
            <a href="https://www.auf.org/a-propos/contact/">Contacts</a>
            <a href="https://www.auf.org/mentions-legales/">Mentions légales</a>
            <a href="https://www.auf.org/politique-de-confidentialite/">Politiques de confidentialités</a>
        </div>
    </div>
    <h2>AUF 2022 Tous droits réservés</h2>
</footer>


<script rel="stylesheet" href="js/bootstrap.js"></script>



</body>
</html>
