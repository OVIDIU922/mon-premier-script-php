<?php
// Crée un tableau associatif avec les titres de livres comme clés et les années d'édition comme valeurs
$livres = [
    "L'île au trésor" => 1883,
    "L'étrange cas du Docteur Jekyll et de Mr Hyde" => 1886,
    "Le maître de Ballantrae" => 1889
];

// Trie le tableau par ordre croissant d'années d'édition
asort($livres);

// Affiche chaque livre avec son année d'édition
foreach ($livres as $titre => $annee) {
    echo "$annee - $titre\n";
}
?>
