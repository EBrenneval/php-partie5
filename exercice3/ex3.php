<?php
include '../index.php';
?>
<div class="ex">
<h2>Exercice 3</h2>
<p>Enoncé de l'exercice :  Avec le tableau de l'exercice , afficher la valeur de l'index 5.
.</p>

<p class="result">
        <?php
        // la fonction array permet de créer le tableau 
$calendar = array('janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin','juillet','aout','septembre', 'octobre','novembre','decembre');
 echo $calendar [5];  // affiche l'index 5 du tab. 
        ?>
</p>
    </body>
</html>
