<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
<?php
$total = 20;
echo "Hello world ";
echo $total;
echo gettype($total);

?>
</div> 
<?= ' hello 2 fois !' ?>
<!-- /jour 1 -->
<!-- exercice 0 -->
<?php
$nbr = 5;
echo  ("<br/>$nbr");
$monPrenom = "remi";
echo ("<br/>mon prenom est $monPrenom");
$myBooleen = false;
echo ("<br/> la variable \$myBooleen est de type ");echo gettype($myBooleen);
?>
<!-- exercice 1 -->
<?php 
$a = 10;
$b = 12;
$total = $a+$b;
echo("<br/>");
echo("le resultat de l'addition a + b est égal a $total");
?>
<!-- exercice 2 -->
<?php 
$a = 5;
$b = 3;
$c = $a + $b;
echo("<br/>");
echo("variable a =  $a, variable b = $b,la variable c = $c");
$a = 2;
echo("<br/> a =  $a");
$c = $b - $a;
echo("<br/> a = $a , b = $b ,c = $c");
?>




<!-- exercice 3 -->
<?php 
$a = 15;
$b = 23;
echo("<br/>");
echo("a = $a, b = $b");

$c = $a;
$a = $b;
$b = $c;

echo("a = $a, b = $b");
?>
<!-- exercice 4 -->
<?php 
$prixHT = 1.80;
$nbrArticle = 10;
$TVA = 0.20;
$taxe = $prixHT * $TVA;
$prixTotalTTC = ($prixHT + $taxe)*$nbrArticle;
echo "<br/>$taxe";
echo "<br/>$prixTotalTTC";
?>
<!-- exercice 5 -->
<?php 
$a = "bonjour";
echo "<br/> \$a $a";
?>
<!-- exercie 6 -->
<?php
$a = "bon";
$b = "jour";
$c = 10;
$resultat = $a.$b.$c+1;
echo"<br/>$resultat";
?>
<!-- exercice 7 -->
<?php
$a = "bonjour";
$b = "<p>l'Adrar </p>";
echo "<p>$a l'Adrar </p>";
echo "<p>" . $a . "l'Adrar </p>";
echo "$a.$b";
?>
<!-- exercice 8: -->

<?php
function arrondit(float $a){
    return round($a);
}
echo "<br/>";
$nbrFloat = 4.2;
echo arrondit (4.5);
echo "<br/>";
?>
<!-- exercice 9 -->
<?php
function additionne3Valeurs ($a,$b,$c){
    $result = $a+$b+$c;
    return $result;
}

echo additionne3Valeurs(1,2,3);
?>

<?php
function average($a,$b,$c){
    $result = ($a+$b+$c) / 3;
    return $result;
}

echo "<br/>";
echo average(5,10,30);
echo "<br/>";

//jour 2;

//Exercice 1 
function PosOuNeg ($a){
    if ($a > 0){
        echo "c'est positif";
    }elseif ($a < 0){
        echo "c'est négatif";
    }else if ($a == 0){
        echo "c'est égal à 0";
        }
    }

PosOuNeg(-3);

echo'&nbsp';
// exercice 2  

function whoIsTheBigger($a,$b,$c){
    if($a>$b){
        if($a>$c){
            echo "la valeur 1 est la plus grande";
        }
    }else if($b>$c){
        echo "la valeur 2 est la plus grande";
    }else{
        echo"la valeur 3 est la plus grande";
    }
}
whoIsTheBigger(1,2,3);
echo'&nbsp';

// Exercice 3 

function WhoIsTheSmallest ($a,$b,$c){
    if ($a<$b){
        if ($a<$c){
            echo "La valeur 1 est la plus petite";
        }
    }else if ($b<$c){
        echo "La valeur 2 est la plus petite";
    }else{
        echo "La valeur 3 est la plus petite";
    }
}

WhoIsTheSmallest(14,12,36);

// exercice 4

function calculePrixFinal(float $prix){
    if($prix >2000){
        $prix = $prix -($prix * 0.2);
        return $prix; 
    }else if($prix > 1000){
        $prix = $prix -($prix * 0.1);
        return $prix;
    }else{
        echo "il n'y a pas de ristourne";
    }
}
echo calculePrixFinal(999);

//exercice 5

function biSextile (int $a){
    if ($a%4 === 0){
        if($a%400 !== 0 && $a%100 === 0 ){
            echo "$a n'est pas bisextile";

        }else{
            echo "$a est bisextile";
        }
    }    

}
biSextile(1900);



//Exercice 1 
function findRandom($nbr){
    $count = 0;
    $randomNumber = rand(1,1000);
    while($nbr !== $randomNumber){
        $count ++;
        $randomNumber = rand(1,1000);
    }
    echo $count;
}

function mentalist($choix){
        $count = 0;
        $min = 1;
        $max = 1000;
        $randomInt = rand($min,$max);
    while($choix !== $randomInt){
        $count ++;
        if ($choix>$randomInt){
            $min = $randomInt;
            $randomInt = rand($randomInt,$max);
        }else if($choix<$randomInt){
            $max = $randomInt;
            $randomInt = rand($min,$randomInt);
        }
    }
    echo $count;
    
}
echo "<br/>";
mentalist(50);



echo "<br/>";
findRandom(80);
// Exercice 2 
function buildColumn ($a,$b){
    for($i=0; $i<=$a; $i++){
        echo "<br/>";
        for ($j=0;$j<$b;$j++){
            echo $i;
        }
    }
}

buildColumn(6,10);

// Exercice 3 




// buildLine(7);
 function secondTry($a){
    for($i = 1 ; $i <= $a ; $i++){
        echo "<br/>";
        for($j = 0 ; $j< $i; $j++){
            echo $i;
        }
    }
 }
secondTry(7);

















?>


</body>
</html>




























  
</body>
</html>