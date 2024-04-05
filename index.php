<?php
function writeSecretSentence($parametre1, $parametre2) {
    $phraseMystere = $parametre1 . " s'" . $parametre2;
    return $phraseMystere;
}

// Exemple d'utilisation :
$mot1 = "La lune";
$mot2 = "éclaire";
$resultat = writeSecretSentence($mot1, $mot2);
echo $resultat; // Affiche : "La lune s'éclaire"
?>
