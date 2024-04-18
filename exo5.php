<!DOCTYPE HTML>
<html>  
<body>
    <h1>Exercice 5</h1>

    <p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
    précisant le nom des champs associés.<br><br></p>
    <h3>Exemple</h3><br>
    <p>$nomsInput = ["Nom","Prénom","Ville"];
    afficherInput($nomsInput);</p>


    <h2>Résultat</h2>
</form>

</body>
</html>

<?php

$nomsInput = ["Nom","Prenom","Ville"];
function afficherInput($nomsInput) {
    $result ="<form method='post' action='#'>";

    foreach($nomsInput as $nom) {
        $result.= "
        <label for='$nom'>$nom</label><br>
        <input type='text' name='$nom' id='$nom'><br>";
    }
    return $result.="</form>";
}

echo afficherInput($nomsInput);

?>
