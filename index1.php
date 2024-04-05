$characters = [
    "Negan" => [
        "city" => "The Sanctuary",
        "weapon" => "Lucille"
    ],
    "Daryl" => [
        "city" => "Alexandria",
        "weapon" => "crossbow"
    ],
    "Ezekiel" => [
        "city" => "The Kingdom",
        "weapon" => "Shiva"
    ]
];

// We write code here
 echo "Hello World";
 echo $characters["Daryl"]["weapon"];
 var_dump($characters["Ezekiel"]["weapon"]);
 string(5) "Shiva"
 var_dump($characters["Negan"]);
 array(2) { ["city"]=> string(13) "The Sanctuary" ["weapon"]=> string(7) "Lucille" }
 echo "<pre>";
var_dump($characters["Negan"]);
echo "</pre>";
var_dump($characters["Daryl"]);
header("location: https://www.google.fr");
var_dump($characters["Daryl"]);
exit();
header("location: https://www.google.fr");
