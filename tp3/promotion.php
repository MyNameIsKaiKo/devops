<?php
require 'biblio/connection.php';
require 'biblio/scriptpromotion.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>les classes</title>
</head>
<body>
    <h1>les élèves :</h1>
    <div class="topnav">
    <a class="active" href="#">Promotion</a>
    <a href="recherche.php">Recherche</a>
    <a href="http://localhost/projetMemory/">Projet Memory</a>
    </div> 
    <form action="" method="post" id="studentForm">
        <table>
            <tr>
                <td>
                    <p>Nom</p>
                </td>
                <td>
                    <p>Prenom</p>
                </td>
                <td>
                    <p>Promo</p>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" id="add" name="add" value = "">
                </td>
                <td>
                    <input type="text" id="add2" name="add2" value = "">
                </td>
                <td>
                    <select name="promo" id="promo" form="studentForm">
                    <?php
                        showAllPromote($promotions);
                    ?>
                    </select>
                </td>
                <td>
                <input type="submit" id="submit" name="submit" value="confirmer">
                </td>
            </tr>
        </table>
    </form>
    <ul>
        <?php
        showStudent($etudiants);
        ?>
    </ul>
    <a class="buttonReturn" href="index.php" >retour</a>
</body>
</html>