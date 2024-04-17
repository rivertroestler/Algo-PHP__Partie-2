<style>
table, th, td {
  border:1px solid black;
}
</style>

<h1>Exercice 2</h1>
<p>Soit le tableau suivant :<br>
$capitales = 
[France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"]; <br><br>
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée. <br> <br>
ous devrez appeler la fonction comme suit : afficherTableHTML($capitales);<br>
</p>

<!--<table style="width:100%">
  <tr>
    <th>Pays</th>
    <th>Capitale</th>
    
  </tr>
  <tr>
    <td>allemagne</td>
    <td>berlin</td>
   
  </tr>
  <tr>
    <td>italie</td>
    <td>rome</td>
  </tr>
  <tr>
    <td>usa</td>
    <td>washington</td>
  </tr>
</table>
</!-->

<h2>Résultat</h2>




<?php

$capitales = array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");

ksort($capitales);
echo "<table>

<thead>
    <tr>
        <th>Pays</th>
        <th>Capital</th>
    </tr>
</thead><tbody>";
foreach($capitales as $pays => $capitale){
    echo "<tr>
                <td>".strtoupper($pays)."</td>
                <td>".ucwords($capitale)."</td> 
         </tr>";
}
echo 
"</tbody>
</table> 
</body>
</html>";
?>