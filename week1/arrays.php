<?php


$aanhef = array(
    "aanhef" => "Beste ",
    "persoon" => ""
);

$korting = array(
    "product" => "U heeft in de voorgaande bestelling voor [[product]] gekozen",
    "korting" => "Bij Uw volgende bestelling kunnen we U een korting van 10% aanbieden op hetzelfde product"
);

$ondertekening = array(
  "groet" => "Met vriendelijke groet,",
  "naam" => "Jari",
  "functie" => "Directeur Webshop beheer"
);

print_r($aanhef);
echo "</br>";
echo var_dump($aanhef);
echo "</br>";
print_r($korting);
echo "</br>";
echo var_dump($korting);
echo "</br>";
print_r($ondertekening);
echo "</br>";
echo var_dump($ondertekening);
echo "</br>";



echo "</br>";
echo "</br>";



echo str_replace("[[product]]", "blikje cola", $korting["product"]);



echo "</br>";
echo "</br>";




$aanbieding = array_merge($aanhef, $korting, $ondertekening);

 print_r($aanbieding);

