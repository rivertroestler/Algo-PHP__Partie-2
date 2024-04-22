<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date.
<br>
Exemple : <br>
formaterDateFr("2018-02-23");
</p>


<h2>Résultat</h2>

<?php

$date = "2018-02-23";

function formaterDateFr($date)
{
  //créer un objet DateTime et spécifier le fuseau horaire
  $dateTime = new DateTime($date, new DateTimeZone('Europe/Paris'));
  return 
  //formater l'objet dateTime
  IntlDateFormatter::formatObject($dateTime, 'eeee d MMMM y', 'fr_FR'); 
//eeee = le jour en entier, d = jour, MMMM= mois en toute lettre, y= année
}

echo formaterDateFr($date);
