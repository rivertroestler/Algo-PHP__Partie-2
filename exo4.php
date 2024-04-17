<style>
table, th, td {
  border:1px solid black;
}
</style>

<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un 
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :<br>
https://fr.wikipedia.org/wiki/ <br><br>
Le tableau passé en argument sera le suivant : <br>
$capitales = ["France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid"];<br>
</p>

<h2>Résultat</h2>

<?php


$capitales = array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");

ksort($capitales);

///
function wikiAffichage() {
    foreach($capitales as $pays => $capitale) {
        return $wikicapitales[$pays]." ".$pays;
        
    }

}
///

echo "<table>
<thead>
    <tr>
        <th>Pays</th>
        <th>Capitale</th>
        <th>Lien  Wiki</th>
    </tr>
</thead><tbody>";
foreach($capitales as $pays => $capitale){
    echo "<tr>
                <td>".strtoupper($pays)."</td>
                <td>".ucwords($capitale)."</td>
                <td><a href='https://fr.wikipedia.org/wiki/".ucwords($capitale)."'>Lien</a></td>
        </tr>";
}

echo
"</tbody>
</table> 
</body>
</html>";
