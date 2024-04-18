<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;
</p>

<h2>Résultat</h2>

<?php

$texte = "Mon texte en parametre";
$color = "red";

function convertirMajRouge($texte) : string {
    $resultat = strtoupper($texte);
    return "<font color='".$color."'>".$resultat."</font>";
}
echo convertirMajRouge($texte);
