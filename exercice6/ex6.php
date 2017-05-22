<?php
include '../index.php';
?>
<div class="ex">
<h2>Exercice 6</h2>
<p>Enoncé de l'exercice : Avec le tableau de l'exercice 5, afficher la valeur de l'index 59. </p>

<p class="result">
 <?php
 // on crée le tableau 
        $hautDeFrance = array (
        '02' =>'Aisne',
        '60' => 'Oise',
        '80' => 'Somme',
        '59' => 'Nord',
        '62' => 'Pas de calais');
        echo $hautDeFrance['59'];  // on affiche la valeur de l'index 59.
 
 
 
?>
</p>
    </body>
</html>
