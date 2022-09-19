<?php
require 'biblio/connection.php';

# Ajout d'une promotion
if(isset($_POST["add"])){
    if(is_null($_POST["add"]) != 1){
        $sqlQuery = 'INSERT INTO promotion(nom)
        VALUES (:nom)';
        $insertPromo = $db->prepare($sqlQuery);
        $insertPromo->execute(['nom' => htmlspecialchars($_POST["add"])]);
    }
}

#Delete d'une promotion
if(isset($_GET['hidensup'])){
    require 'importStudentWhere.php';
    $etudiants = importWhereHiden($db);
    $count = 0;
    foreach($etudiants as $etudiant){
        $count++;
    }
    if($count == 0){
        $deletepromoStatement = $db->prepare('DELETE FROM promotion WHERE id=:id');
        $deletepromoStatement->execute(['id'=> $_GET['hidensup']]);
    }
    else{
        if($_GET['hidensup'] != 0){
            $message='Cette promotions contient des élèves';
            echo '<script type="text/javascript">window.alert("'.$message.'");</script>';   
        }
    }


}

require 'importAllPromo.php';
#affichage de mes promo
function myClass($promotions, $db){

    foreach($promotions as $promotion){
        $sqlQuery = 'SELECT * FROM etudiant WHERE Promotion_id = '. $promotion['id']. '';
        $etudiantStatement = $db->prepare($sqlQuery);
        $etudiantStatement->execute();
        $etudiants = $etudiantStatement->fetchAll();
        $counts = 0;
        foreach($etudiants as $etudiant){
            $counts++;
        }

        if($counts == 0){
            echo '<li><form method="GET"><a class="buttonFull" href= "promotion.php?id='. $promotion["id"] .'">' . $promotion['nom'] . '</a><input type="hidden" value="'.$promotion["id"].'"id="hidensup" name="hidensup"><input type="submit" id = "sup" name="sup" value="X"></form></li>';
        }
        else{
            echo '<li><a class="buttonEmpty" href= "promotion.php?id='. $promotion["id"] .'">' . $promotion['nom'] . '</a></li>';
        }

        echo '<br>';
    }
}

?>