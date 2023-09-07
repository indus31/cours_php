<?php
//connection DB
$hostName = "docker-lamp-mysql";
$userName = "root";
$password = "p@ssw0rd";
$dbName = "evaluation";

$conn = null;

try{
    $conn = new PDO("mysql:host = $hostName;dbname = $dbName",$userName,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    
}catch (PDOException $e) {
    $e->getMessage();
}
//
var_dump($conn);

// function qui ajoute un article
function addArticle($conn){
    try{
    $nomArticle = $_POST["nom_article"];
    $PrixArticle = $_POST["prix_article"];
    $sql = "INSERT INTO article(nom_article,prix_article)VALUES(?,?)";
    $req = $conn->prepare($sql);
    $req->bindParam(1, $nomArticle);
    $req->bindParam(2, $PrixArticle);
    $req->execute;
    }
    catch(PDOException $e){
         
            echo "erreur : " . $e->getMessage();
    }
   
}







if(isset($_POST["nom_article"])&& isset($_POST["prix_article"])){
        addArticle($conn);
        header("location: ./index2.php");
        echo "l'article a bien été ajouter en BDD";

        
}else{
    header("location: ./index2.php");
    echo "ERREUR l'article est vide !! Rien n'a été ajouter en BDD  
    try again Looser !!!";
}

// $conn = null;






























?>