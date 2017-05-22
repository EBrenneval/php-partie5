<?php
include '../index.php';
?>
<div class="ex">
<h2>Exercice 2</h2>
<p>Enoncé de l'exercice :Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.   
.</p>

<p class="result">
        <?php
        // la fonction array permet de créer le tableau 
$calendar = array('janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin','juillet','aout','septembre', 'octobre','novembre','decembre');
echo $calendar[2];   // affiche le 3eme élément du tab. 
 
        ?>
</p>
    </body>
</html>
