<?php
include '../index.php';
?>
<div class="ex">
<h2>Exercice 8</h2>
<p>Enoncé de l'exercice :Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.. </p>

<p class="result">
        <?php
        // on crée le tableau 
        $var = array (
        '02' =>'Aisne',
        '60' => 'Oise',
        '80' => 'Somme',
        '59' => 'Nord',
        '62' => 'Pas de calais');
        // on fait une boucle pour pvoir afficher le tab
        foreach ($var as $dep)
        {
    echo $dep. '<br />'; 
        }
        ?>
    </p>
    </body>
</html>
