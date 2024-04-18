<h1>Exercice 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg<br>
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran. <br>

Exemple: <br>
repeterImage($url,4);

</p>


<h2>Résultat</h2>

<?php

$url = '<img src="http://my.mobirise.com/data/userpic/764.jpg">'; 
$nbRepetitions = 4;
echo repeterImage($url, $nbRepetitions);

function repeterImage($url, int $nbRepetitions){

    $result = "";
    foreach(range(1, $nbRepetitions)as $value) {
        $result .= $url." ";
    }

    return $result;
}
