<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
valeurs en paramètre ("Monsieur","Madame","Mademoiselle"). <br> <br>
exemple: <br>
afficherRadio($nomsRadio);
</p>


<h2>Résultat</h2>

<?php

$nomsRadio = ["Masculin" => false, "Féminin" => false, "Autre" => true];

echo afficherRadio($nomsRadio);
function afficherRadio($nomsRadio)
{
    $resultat = "";
    foreach ($nomsRadio as $nom => $value) {
        $checked = $nom ? "checked" : null; //verifie la valeur checked
        $resultat .= "<input type='radio' name='civilite' value='$nom' id='$nom' $checked> <label for='$nom'>$nom</label><br>";
    }
    return $resultat;
}
