<?php
include '../index.php';
?>
<div class="ex">
<h2>Exercice 4</h2>
<p>Enoncé de l'exercice : Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant. </p>

<p class="result">
        <?php
 // la fonction array permet de créer le tableau 
$calendar = array('janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin','juillet','aout','septembre', 'octobre','novembre','decembre');
        $calendar[7] = 'août';   // ma var + l'élément que je veux changer = ce que je met à la place. 
        echo $calendar[7];
?>
</p>
    </body>
</html>
