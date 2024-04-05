<?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0, 2)];

// Choisissons l'arme de Stevenson en fonction des règles du jeu
if ($opponentWeapon === 'fists') {
    $stevensonWeapon = 'gun'; // Le pistolet bat le poing
} elseif ($opponentWeapon === 'whip') {
    $stevensonWeapon = 'fists'; // Le poing bat le fouet
} else {
    $stevensonWeapon = 'whip'; // Le fouet bat le pistolet
}

// Affichons le résultat
echo "L'adversaire a choisi l'arme : $opponentWeapon\n";
echo "Robert Stevenson utilise l'arme : $stevensonWeapon\n";
?>
