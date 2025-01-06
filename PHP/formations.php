<link rel="stylesheet" href="../CSS/affichage.css" />





<?php

require_once("../YAML/yaml.php");
$data=yaml_parse_file('../data/formations.yaml');

echo "<h1>".$data["titre"]."</h1>\n";


echo "<ul>";

foreach($data["Diplomes"] as $unDiplome){
    echo "<h2>".$unDiplome["Nom"]."</h2>";
    echo "<li>".$unDiplome["Etablissement"]." à ".$unDiplome["Lieu"]."</li>";
    echo "<li>"."Session : ".$unDiplome["Date de début"]."-".$unDiplome["Date de fin"]."</li>";
    echo "<p>".$unDiplome["Contenu"]."</p>"."\n";
}
echo "</ul>";

?>






<a href="CV2024.pdf" target="_blank">Télécharger mon CV en cliquant ICI !</a>

<div class="button-page-container">
    
<form action="../index.php" method="post">
    <button type="submit">Retour à la page d'accueil</button>
</form>

<form action="contact.php" method="post">
    <button type="submit">Contact</button>
 </form>
</div>