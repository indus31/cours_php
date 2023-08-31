<?php
if(isset($_POST["nombre1"]) && is_Numeric($_POST["nombre1"]) && isset($_POST["nombre2"]) && is_Numeric($_POST["nombre2"])){
    $nombre1 = (float)$_POST["nombre1"];
    $nombre2 = (float)$_POST["nombre2"];
    $select = $_POST["selection"];
    
}
if($select == "+"){
    echo $nombre1." ".$select." ".$nombre2."  = ".$nombre1 + $nombre2;
}elseif($select == "-"){
    echo $nombre1." ".$select." ".$nombre2."  = ".$nombre1 - $nombre2;
}elseif($select == "*"){
    echo $nombre1." ".$select." ".$nombre2."  = ".$nombre1 * $nombre2;
}elseif($select == "/"){
    echo $nombre1." ".$select." ".$nombre2."  = ".$nombre1 / $nombre2;
}else{
    echo "dégage d'ici motherFucker";
}

// eval exécute une chaine comme un script php;
