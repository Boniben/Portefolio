<link rel="stylesheet" href="../CSS/affichage.css" />


<?php

require_once("../YAML/yaml.php");
$data=yaml_parse_file('../data/accueil.yaml');

echo "<h1>".$data["titre"]."</h1>\n";




echo "<p>".ucfirst($data["Identité"]["Nom"])." ".$data["Identité"]["Prénom"]." ".$data["Identité"]["Age"]."</p>\n";
echo "<h2>".ucfirst($data["accroche"])."</h2>\n";
echo "<p>".ucfirst($data["présentation"])."</p>\n";

echo "<img src='\portfolio\data\PhotoBB.jpg'>";
?>

<div class="button-page-container">

<form action="../index.php" method="post">
    <button type="submit">Retour à la page d'accueil</button>
</form>

<form action="contact.php" method="post">
    <button type="submit">Contact</button>
 </form>
</div>
