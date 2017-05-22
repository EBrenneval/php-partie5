<?php
include '../index.php';
?>
<div class="ex">
<h2>Exercice 1</h2>
<p>Enoncé de l'exercice :Créer un tableau mois et l'initialiser avec les valeurs suivantes :
    janvier
    février
    mars
    avril
    mai
    juin
    juillet
    aout
    septembre
    octobre
    novembre
    décembre
.</p>

<p class="result">
<?php
// la fonction array permet de créer le tableau 
$calendar = array('janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin','juillet','aout','septembre', 'octobre','novembre','decembre');
var_dump($calendar); // var_dump permet d'afficher le tableau.
?>
</p>
    </body>
</html>
