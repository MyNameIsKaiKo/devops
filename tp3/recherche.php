<?php require 'biblio/search.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Recherche</title>
</head>
<body>
    <h1>Option de recherche</h1>
    <div class="topnav">
    <a href="index.php">Promotion</a>
    <a class="active" href="recherche.php">Recherche</a>
    <a href="http://localhost/projetMemory/">Projet Memory</a>
    </div> 
    <h2 class = "center">Entrez un Nom, un Prenom ou le libelle d'une promotion</h2>
    <div class="container">
        <div class="container Element">

            <form action="" method="post">
            <input type="text" name="entry" id="entry" size="43">
            <br>
            <input type="submit" name="Rpromo" id="Rpromo" value="Recherchez une promo">
            <input type="submit" name="Rstudent" id="Rstudent" value="Recherchez un élève">
            </form>
        </div>
    </div>
    <ul>
        <?php showresearch($db); ?>
    </ul>

</body>
</html>