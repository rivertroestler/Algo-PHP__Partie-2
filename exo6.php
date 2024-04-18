<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
de valeurs. <br>
Exemple: <br>
$elements = ["Monsieur","Madame","Mademoiselle"];
alimenterListeDeroulante($elements);
</p>

<h2>Résultat</h2>

<?php

$elements = ["Monsieur","Madame","Mademoiselle"];

function alimenterListeDeroulante($elements) {
    $result ="<select>";
    foreach($elements as $element) {
        $result.= "<option value='$element'>$element</option>";
    }
    return $result.="</select>";
}

echo alimenterListeDeroulante($elements);