<h1>Exercice 9</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un informations
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
<br>
Le informations devra également comporter un bouton permettant de le soumettre à un traitement
de validation (submit)
</p>


<h2>Résultat</h2>

<?php

$informations = ["Nom","Prénom","Adresse e-mail", "Ville","Sexe"];
$formations = ["Développeur web","Designer Web","Intégrateur","Chef de projet"];

//formulaire informations
function afficherInput($informations) {
    $result ="<form method='post' action='#'>";

    foreach($informations as $nom) {
        $result.= "
        <label for='$nom'>$nom</label><br>
        <input type='text' name='$nom' id='$nom'><br>";
    }
    
    return $result.="</form>";
  
}

//select list formations
function alimenterListeDeroulante($formations) {
    $resultFormation ="<select>";
    foreach($formations as $formation) {
        $resultFormation.= "<option value='$formation'>$formation</option>";
    }
    return $resultFormation.="</select>";
}
?>

<html>
<body>

<form action="welcome.php" method="POST">
<?php 
echo afficherInput($informations);
echo alimenterListeDeroulante($formations);
?>
<br><br>
<input type="submit">
</form>
</body>
</html>