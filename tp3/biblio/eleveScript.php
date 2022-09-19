<?php
require "connection.php";
require "importStudentWhere.php";

$etudiants = importWhereIdentifiant($db);

function giveName($etudiants, $db){
    foreach($etudiants as $etudiant){
        echo $etudiant['nom'];
    }
}

function giveSurName($etudiants, $db){
    foreach($etudiants as $etudiant){
        echo $etudiant['prenom'];
    }
}

function giveimg($etudiants, $db){
    foreach($etudiants as $etudiant){
        echo $etudiant['img'];
    }
}





























?>