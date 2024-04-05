<?php
// Création du tableau associatif avec les informations
$monTableau = [
    'nom_complet' => [
        'prenom' => 'John',
        'nom' => 'Doe'
    ],
    'ville' => 'Redmond',
    'arme_zombie' => 'Katana'
];

// Affichage du tableau avec var_dump() mis en forme avec Xdebug
echo '<pre>';
var_dump($monTableau);
echo '</pre>';
?>
