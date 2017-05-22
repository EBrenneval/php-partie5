<?php
include '../index.php';
?>
<div class="ex">
<h2>Exercice 10</h2>
<p>Enoncé de l'exercice :Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
Cela pourra être, par exemple, de la forme : "Le département" + nom_departement + "a le numéro" + num_departement. </p>

<p class="result">
        <?php
        
       $var = array (
        '02' =>'Aisne',
        '60' => 'Oise',
        '80' => 'Somme',
        '59' => 'Nord',
        '62' => 'Pas de calais');
    foreach($var as $elements => $dep) {  // boucle qui prends dans le tableau  l'index et la val associée
    echo 'le département '. $dep . ' a le numéro '. $elements; // affiche phrase + var concaténées
    ?>
    <br/>
    <?php
}
        ?>
    </body>
</html>
