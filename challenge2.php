
<?php
function decryptMessage($message) {
    // Étape 1: Calculer la longueur de la chaîne et diviser par 2
    $keyLength = strlen($message) / 2;
    
    // Étape 2: Récupérer la sous-chaîne à partir du 6ème caractère
    $subString = substr($message, 5, $keyLength);
    
    // Étape 3: Remplacer les chaînes '@#?' par un espace
    $cleanedString = str_replace('@#?', ' ', $subString);
    
    // Étape 4: Inverser la chaîne de caractères
    $decryptedMessage = strrev($cleanedString);
    
    return $decryptedMessage;
}

// Messages à déchiffrer
$message1 = "0@sn9sirppa@#?ia’jgtvryko1";
$message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$message3 = "aopi?sgnirts@#?sedhtg+p9l!";

// Déchiffrer les messages
$decrypted1 = decryptMessage($message1);
$decrypted2 = decryptMessage($message2);
$decrypted3 = decryptMessage($message3);

// Afficher les résultats
echo "Message 1 déchiffré : $decrypted1\n";
echo "Message 2 déchiffré : $decrypted2\n";
echo "Message 3 déchiffré : $decrypted3\n";
?>
