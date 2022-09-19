<?php
# Import all promo
$sqlQuery = 'SELECT * FROM promotion';
$promotionStatement = $db->prepare($sqlQuery);
$promotionStatement->execute();
$promotions = $promotionStatement->fetchAll();
?>