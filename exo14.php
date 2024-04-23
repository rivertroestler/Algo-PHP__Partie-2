<h1>Exercice 14</h1> <br>
<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
adresse e-mail a le bon format.</p> <br>

<?php

//FILTER_VALIDATE_EMAIL (int)
$email = "elan@elan-formation.fr" ;

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email est une adresse e-mail valide.");
}
else {
    echo("$email est une adresse e-mail invalide.");

}