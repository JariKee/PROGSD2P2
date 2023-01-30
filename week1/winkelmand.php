<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Winkelmand integer</title>
</head>
<body>

<?php
$prijs = 1.25;
echo 'Chocoladereep Prijs: ' . $prijs;
?>

<h2>Winkelmand</h2>
<form action="" method="post">
    <label for="product">Product:</label><br>
    <input type="text" name="product" required placeholder="product"><br>
    <label for="aantal">Aantal:</label><br>
    <input type=number min="1" max="15" name="aantal" required placeholder="aantal"><br><br>
    <input type="submit" name="submit" value="toevoegen" >
</form>

<p>Vul je geen action in dan wordt het formulier verwerkt door de huidige pagina".</p>

<?php

if (isset($_POST['submit'])) {

    $product = $_POST['product'];
    $aantal = $_POST['aantal'];

    if ($product == "Chocoladereep") {

    
    

    if ($aantal > 0) { 

        echo "Gekozen product met totaal prijs. <br> <br>";
        echo "Product: " . $product . "</br>";
        echo "Aantal in winkelmand: " . $aantal . "</br>";
        echo "Totaal prijs: " . $prijs * $aantal;
    

    }

    
    }
    else {
        echo "<script>alert('dit product bestaat niet')</script>";
    }
}
?>


</body>
</html>