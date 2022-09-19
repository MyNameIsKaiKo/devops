<?php
require 'biblio/script.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>PhpMyAdminCSympa</title>
</head>
<body>
    <h1>Liste des promotions</h1>
    <div class="topnav">
    <a class="active" href="#">Promotion</a>
    <a href="recherche.php">Recherche</a>
    <a href="http://localhost/projetMemory/">Projet Memory</a>
    </div> 
    <h2>Ajouter une promotion</h2>
    <form action="" method="post">
        <input type="text" id="add" name="add" value = "">
        <input type="submit" id="submit" name="submit" value="confirmer">
    </form>
    <ul>
        <?php
        myClass($promotions, $db)
        ?>
    </ul>
</body>
</html>