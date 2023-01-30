<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String methodes</title>
</head>
<body>

<h2>String methodes</h2>
<form action="" method="post">
    <label for="naam">Naam:</label><br>
    <input type="text" name="naam" required placeholder="Naam"><br><br>

    <label for="straat">Straat:</label><br>
    <input type=text name="straat" required placeholder="Straat">><br><br>

    <label for="huisnummer">Huisnummer:</label><br>
    <input type=text name="huisnummer" required placeholder="Huisnummer">><br><br>

    <label for="postcode">Postcode:</label><br>
    <input type=text name="postcode" required placeholder="Postcode">><br><br>

    <label for="woonplaats">Woonplaats:</label><br>
    <input type=text name="woonplaats" required placeholder="Woonplaats">><br><br>

    <input type="submit" name="submit" value="verzenden" >
</form>

<?php

if (isset($_POST['submit'])) {


    $naam = $_POST['naam'];
    $naamchanged = strtolower(ucfirst(htmlspecialchars($naam)));
    $straat = $_POST['straat'];
    $straatchanged = strtolower(ucfirst(htmlspecialchars($straat)));
    $huisnummer = $_POST['huisnummer'];
    $huisnummerchanged = strtolower(htmlspecialchars($huisnummer));
    $postcode = $_POST['postcode'];
    $postcodechanged = strtolower(htmlspecialchars($postcode));
    $woonplaats = $_POST['woonplaats'];
    $woonplaatschanged = strtolower(ucfirst(htmlspecialchars($woonplaats)));


    if (is_numeric($huisnummer))
    {
        echo
        $naamchanged, '<br>',
        $straatchanged, '<br>',
        $huisnummerchanged, '<br>',
        $postcodechanged, '<br>',
        $woonplaatschanged, '<br>';
    }
    else
    {
        echo '<script>alert("Voer een getal in bij het huisnummer!")</script>';
    }

}
?>

</body>
</html>