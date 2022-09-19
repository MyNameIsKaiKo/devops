<?php
#importation des étudians en fonction de leurs promo
function importWhereId($db){
    $sqlQuery = 'SELECT * FROM etudiant WHERE Promotion_id = '.$_GET["id"]. '';
    $etudiantStatement = $db->prepare($sqlQuery);
    $etudiantStatement->execute();
    $etudiants = $etudiantStatement->fetchAll();
    return $etudiants;
}

#de meme mais pour les supprimés
function importWhereHiden($db){
    $sqlQuery = 'SELECT * FROM etudiant WHERE Promotion_id = '. $_GET['hidensup']. '';
    $etudiantStatement = $db->prepare($sqlQuery);
    $etudiantStatement->execute();
    $etudiants = $etudiantStatement->fetchAll();
    return $etudiants;
}

function importWhereIdentifiant($db){
    $sqlQuery = 'SELECT * FROM etudiant WHERE identifiant = :id';
    $etudiantStatement = $db->prepare($sqlQuery);
    $etudiantStatement->execute([
        'id' => $_GET['id']
    ]);
    $etudiants = $etudiantStatement->fetchAll();
    return $etudiants;
}

?>