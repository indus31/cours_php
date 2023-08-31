<?php
if(isset($_POST["prenom"]) && isset($_POST["nom"])){
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
}

echo "bonjour ".$prenom." ".$nom;
echo "<br>";
echo 'Timestamp actuel : ' .time(). '<br>';