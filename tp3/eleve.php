<?php require "biblio/eleveScript.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php giveName($etudiants, $db);?></title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <h1 class="center">Fiche de l'élève : <?php giveSurName($etudiants, $db); ?></h1>
    <div class="topnav">
    <a  href="index.php">Promotion</a>
    <a href="recherche.php">Recherche</a>
    <a class="active" href="#"><?php giveSurName($etudiants, $db); ?></a>
    </div>
    <img src="<?php giveimg($etudiants, $db) ?>" alt="imagedemelio">
</body>
</html>