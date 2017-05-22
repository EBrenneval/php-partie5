<?php
include '../index.php';
?>
<div class="ex">
<h2>Exercice 9</h2>
<p>Enoncé de l'exercice :Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.. </p>

<p class="result">
        <?php
        $var = array (
        '02' =>'Aisne',
        '60' => 'Oise',
        '80' => 'Somme',
        '59' => 'Nord',
        '62' => 'Pas de calais');
    foreach ($var as $dep) 
        echo $dep// on affiche 
        ?>
    </body>
</html>
