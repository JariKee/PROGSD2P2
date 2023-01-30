<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Winkelmand week3</title>
</head>
<body>

<?php

if(isset($_GET['leegwinkel']) == true){
    setcookie("totaalcookie", 0);
    setcookie("totaalproductcookie", 0);
    header("Location: winkelmand.php"); 
}


if(isset($_COOKIE["totaalcookie"])) {
    $dagtotaal = $_COOKIE["totaalcookie"];
}
else
{
    $dagtotaal = 0;
    setcookie("totaalcookie", 0);
};


if(isset($_COOKIE["totaalproductcookie"])) {
    $totaalproduct = $_COOKIE["totaalproductcookie"];
}
else
{
    $totaalproduct = 0;
    setcookie("totaalproductcookie", 0);
};



$prijzen = array(
        'chocola' => 1.25,
        'snoepgoed' => 2.75,
        'blikje frisdrank' => 2.25,
        'gevulde koek' => 1.75
);

foreach($prijzen as $key => $value){
    echo $key . " €" . $value . "<br>";
}
?>

<h2>Winkelmand</h2>
<form action="" method="post">
    <label for="product">Product:</label><br>
    <input type="text" name="product" required placeholder="product"><br>

    <label for="aantal">Aantal:</label><br>
    <input type=number name="aantal" required placeholder="aantal" min="<?php echo 1?>" max="<?php echo 15?>"><br><br>

    <input type="submit" name="submit" value="toevoegen" >
</form>

<?php

if (isset($_POST['submit'])) {

    $product = $_POST['product'];
    $aantal = $_POST['aantal'];

    if (empty($aantal)) {
        echo 'Aantal moet groter zijn dan 0';
    } else {

        if (array_key_exists($product, $prijzen )) {


            $prijs = $prijzen[$product];

            $totaalproduct = $totaalproduct + $aantal;

            $prijsvangekozenproduct = $aantal * $prijs;
            $dagtotaal = $dagtotaal + $prijsvangekozenproduct;
            setcookie("totaalcookie", $dagtotaal);
            setcookie("totaalproductcookie", $totaalproduct);


            echo '<br><br>';
            echo 'Gekozen product en totaal prijs', '<br><br>';
            echo 'Product: ' . $product . '<br>';
            echo 'Aantal gekozen producten: ' . $aantal . '<br>';
            echo 'Prijs van gekozen product: €' . $prijsvangekozenproduct . '<br>';
            echo 'Aantal producten in winkelmand: ' . $totaalproduct . '<br>';
            echo 'Totaalprijs winkelmand: €' . $dagtotaal . '<br><br>';
            
            
        
          

            if ($dagtotaal > "100"){
                echo 'omdat u meer dan €100 in uw winkelmand heeft krijgt u 5% korting :)' . '<br>';
                echo 'Totaalprijs met korting: €' ;
                echo $dagtotaal /100 *95;   
            }


            ?>
        <br> <a href="winkelmand.php?leegwinkel=true">Winkelmand legen</a> <br>
        <?php

        } else {
            echo 'Dit product wordt niet verkocht';
        }

    }




    
}




else{
    echo 'Totaalprijs winkelmand: ' . $dagtotaal . '<br>';
    echo 'Aantal producten in winkelmand: ' . $totaalproduct . '<br>';
?>
    <a href="winkelmand.php?leegwinkel=true">Winkelmand legen</a>
<?php
}

?>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>


</body>
</html>
