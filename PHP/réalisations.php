<link rel="stylesheet" href="../CSS/affichage.css" />



<?php

require_once("../YAML/yaml.php");
$data=yaml_parse_file('../data/réalisations.yaml');

echo "<h1>".$data["titre"]."</h1>\n";

foreach ($data["Réalisation"] as $réalisation) {

    echo "<h2>" . $réalisation["Description"] . "</h2>";

    echo "<img src='" . $réalisation["Illustration"] . "' id='image_auto". "' />";
    echo "<div id='caroussel'>";
    foreach ($réalisation["Documents"] as $unDocument){

        echo "<img src='" . $unDocument . "' />";
        
    }
    echo "</div>";
}
?>




<div class="button-page-container">

<form action="../index.php" method="post">
    <button type="submit">Retour à la page d'accueil</button>
</form>

<form action="contact.php" method="post">
    <button type="submit">Contact</button>
 </form>

</div>