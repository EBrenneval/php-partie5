<?php
include '../index.php';
?>
<div class="ex">
<h2>Exercice 5</h2>
<p>Enoncé de l'exercice : Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom. </p>

<p class="result">
        <?php
 // on crée le tableau 
        $hautDeFrance = array (
        '02' =>'Aisne',
        '60' => 'Oise',
        '80' => 'Somme',
        '59' => 'Nord',
        '62' => 'Pas de calais');
    var_dump($hautDeFrance);     // on affiche le tableau. 
?>
</p>
    </body>
</html>
