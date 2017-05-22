<?php
include '../index.php';
?>
<div class="ex">
<h2>Exercice 7</h2>
<p>Enoncé de l'exercice :Avec le tableau de l'exercice 5, 
    ajouter la ligne correspondant au département de la ville de Reims.. </p>

<p class="result">
 <?php
// on crée le tableau 
        $var = array (
        '02' =>'Aisne',
        '60' => 'Oise',
        '80' => 'Somme',
        '59' => 'Nord',
        '62' => 'Pas de calais',
       );
       $var['51'] = 'Marne';
       echo $var['51'];
?>
    </body>
</html>
