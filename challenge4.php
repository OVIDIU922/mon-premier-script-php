<?php

// Création du tableau multidimensionnel avec les films et leurs années de sortie
$filmography = [
    'Indiana Jones et le temple maudit' => 1984,
    'Les aventuriers de l\'Arche perdue' => 1981,
    'Indiana Jones et la dernière croisade' => 1989,
];

// Tri des films par ordre croissant d'année de sortie
asort($filmography);

// Boucle pour afficher les titres de films et leurs acteurs associés
foreach ($filmography as $title => $year) {
    // Remplacez les noms des acteurs par les vrais noms
    $actors = ['Harrison Ford', 'Karen Allen', 'Sean Connery'];
    echo "$year - $title\n";
    echo "Dans le film $title, les principaux acteurs sont : $actors[0], $actors[1], $actors[2].\n\n";
}
?>
