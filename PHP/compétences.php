<link rel="stylesheet" href="../CSS/affichage.css" />





<?php

require_once("../YAML/yaml.php");
$data=yaml_parse_file('../data/compétences.yaml');

echo "<h1>".$data["titre"]."</h1>\n";


 // Parcours des domaines
foreach ($data['Domaine'] as $nomDomaine => $competences) {
    // contener pour les domaines
    
    //afficher le domaine
    echo "<h2>" . ucfirst($nomDomaine) . "</h2>";
    
    // Parcours des compétences pour chaque domaine
    foreach ($competences as $unecompetence) {
        //contener pour chaque compétences
    
        // Affichage du nom de la compétence
        echo "<p>" . ucfirst($unecompetence['Nom']) . genererEtoiles($unecompetence['Niveau'])."</div>","</p>";
        // Affichage des étoiles en fonction du niveau de compétence
        
        
    }
    
}

function genererEtoiles($Niveau) {
    $etoilesPleines = str_repeat('<span class="etoile-pleine">★</span>', $Niveau);
    $etoilesVides = str_repeat('<span class="etoile-vide">☆</span>', 5 - $Niveau); // 5 étoiles maximum
    return $etoilesPleines . $etoilesVides;
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