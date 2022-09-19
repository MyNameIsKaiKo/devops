<?php

#ajout d'un élèves -> view = promotion.php
if(isset($_POST["add"]) && isset($_POST["add2"]) && isset($_POST["promo"])){
    if(is_null($_POST["add"]) != 1){
        $sqlQuery = 'INSERT INTO etudiant(nom, prenom, Promotion_id)
        VALUES (:nom, :prenom, :Promotion_id)';
        $insertPromo = $db->prepare($sqlQuery);
        $insertPromo->execute(['nom' => $_POST["add"], 'prenom' => $_POST["add2"], 'Promotion_id' => $_POST["promo"]]);
    }
}

#delete un élèves -> view = promotion.php
if(isset($_POST['hidensup'])){
    $deletestudentStatement = $db->prepare('DELETE FROM etudiant WHERE identifiant=:id');
    $deletestudentStatement->execute(['id'=> $_POST['hidensup']]);
}

require 'biblio/importStudentWhere.php';
$etudiants = importWhereId($db);


require 'biblio/importAllPromo.php';


#affichage des élèves -> view = promotion.php
function showStudent($etudiants){
    $count = 1;
    foreach($etudiants as $etudiant){
        echo '<li><form method="POST"> Prénom :  <b><a class = "buttonEmpty" href = "eleve.php?id='.$etudiant["identifiant"].'">' . $etudiant['prenom']. "</a> </b> nom :  <b>". $etudiant['nom'] . '</b><input type="hidden" value="'.$etudiant["identifiant"].'"id="hidensup" name="hidensup"><input type="submit" id = "sup" name="sup" value="X"></form></li>';
        $count++;
    }
}

#liste des promos pour la création d'un élèves -> view = promotion.php
function showAllPromote($promotions){
    echo '<option value = "'.$_GET['id'].'">Promotion actuel'. '</option>';
    foreach($promotions as $promotion){
        echo '<option value = "'.$promotion['id'].'">' . $promotion['nom'] . '</option>';
        echo '<br>';
    }
}
?>