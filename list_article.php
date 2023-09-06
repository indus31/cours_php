<?php

$hostName = "docker-lamp-mysql";

$userName = "root";
$password = "p@ssw0rd";
$dbName = "articles";

$conn = null;



try{
    $conn = new PDO("mysql:host=$hostName;dbname=$dbName", $userName, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connexion réussie";

    $sql = "SELECT * FROM article";
    $req = $conn->prepare($sql);
    $req->execute();
    foreach($req as $data){?>
       <br> 
       <a href="modif_article.php?id_article=<?= $data["id_article"] ?>"><h1><?php echo $data["nom_article"] ?></h1></a>
       <br>
       <p><?php echo $data["id_article"] ?></p>
       <br>
       <p><?php echo $data["contenu_article"] ?></p><?php
    }




}
catch(PDOException $e){
    echo "erreur : ".$e->getMessage();

}







?>




