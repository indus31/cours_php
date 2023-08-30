<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
        <input type="number" name="input1">
        <input type="number" name="input2">
        <input type="submit" value="ok">
    </form>

    <form action="form.php" method="post">
        <input type="number" name="prixHT">
        <input type="number" name="quantite">
        <input type="number" name="TVA" step = "0.01">
        <input type="submit" value="ok">
    </form>


<?php

$nbr1 = $_POST["input1"];
$nbr2 = $_POST["input2"];

echo $nbr1 + $nbr2;

echo "<br/>";

$prixHt = $_POST["prixHT"];
$Quantite = $_POST["quantite"];
$TVA = $_POST["TVA"];

$totalTTC = ($prixHt * $Quantite) * $TVA;

echo "le prix totalTTC est de ".$totalTTC."$";


?>
</body>
</html>