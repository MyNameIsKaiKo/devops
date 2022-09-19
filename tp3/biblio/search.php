<?php
require 'connection.php';
# Script de recherches lié à la vue recherche.php




function showresearch($db){
    if(isset($_POST["Rpromo"]) && isset($_POST["entry"])){
        if($_POST["Rpromo"] == "Recherchez une promo"){
            $sqlQuery = 'SELECT * FROM promotion WHERE nom LIKE :nom';
            $promotionStatement = $db->prepare($sqlQuery);
            $promotionStatement->execute([
                'nom' => '%'.$_POST['entry'].'%'
            ]);
            $promotions = $promotionStatement->fetchAll();


            foreach($promotions as $promotion){
                echo '<li><a class="buttonFull" href="promotion.php?id='.$promotion["id"].'">'.$promotion['nom'].'</a></li>';
            }
        }
    }
    else if(isset($_POST["Rstudent"]) && isset($_POST["entry"])){
        if($_POST["Rstudent"] == "Recherchez un élève"){
            $sqlQuery = 'SELECT etudiant.*, promotion.nom as promotion FROM etudiant INNER JOIN promotion ON etudiant.Promotion_id = promotion.id WHERE etudiant.nom LIKE :nom OR etudiant.prenom LIKE :nom';
            $eleveStatement = $db->prepare($sqlQuery);
            $eleveStatement->execute([
                'nom' => '%'.$_POST['entry'].'%'
            ]);
            
            $eleves = $eleveStatement->fetchAll();



            foreach($eleves as $eleve){
                $sqlQuery = 'SELECT * FROM promotion WHERE nom LIKE :nom';
                $promotionStatement = $db->prepare($sqlQuery);
                $promotionStatement->execute([
                    'nom' => '%'.$eleve['promotion'].'%'
                ]);
                $pro = 0;
                $promotions = $promotionStatement->fetchAll();
                foreach($promotions as $promotion){
                    if($eleve['promotion'] == $promotion['nom']){
                        $pro = $promotion;
                    }
                }
                echo '<li> <b>Prenom</b> <a class="buttonEmpty" href = "eleve.php?id='.$eleve['identifiant'].'"> : '.$eleve['prenom'].'</a> <b>Nom</b> :'.$eleve['nom'].' <b>Dans la promotion :</b> <a class="buttonFull" href="promotion.php?id='.$pro["id"].'"> '.$eleve['promotion'].'</a></li>';
            }
        }
    } 
}


?>