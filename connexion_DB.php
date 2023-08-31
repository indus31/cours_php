<?php
// $db = new PDO('mysql:host=localhost;dbname=bagarre','root','p@ssw0rd',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


$hostName = "docker-lamp-mysql";

$userName = "root";
$password = "p@ssw0rd";
$dbName = "bagarre";

$conn = null;


try{
    //on essaie de se connecter
    $conn = new PDO("mysql:host=$hostName;dbname=$dbName", $userName, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connexion réussie";
}
//on capture les exceptions et on affiche les infos relative à celle-ci
catch(PDOException $e){
    echo "erreur : ".$e->getMessage();

}
// count($_POST["nom_article"] < 50)
if(isset($_POST["nom_article"]) && isset($_POST["contenu_article"])){

    $name = $_POST["nom_article"];
    $content = $_POST["contenu_article"];

}



$req = $conn->prepare('INSERT INTO article(
    value ($name,$content)');

$req->bindParam('nom_article',$name,PDO::PARAM_STR);
$req->execute();

// <?php
//     if(isset($_POST["nom_article"]) && isset($_POST["contenu_article"])){

//         /*Connexion bdd */
//         $db = new PDO('mysql:host=docker-lamp-mysql;dbname=articles', 'root','p@ssw0rd',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
//         $db ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//         /* Ajout des input en BDD*/
        
//         $name = $_POST["nom_article"];
//         $content = $_POST["contenu_article"];
//         $req = $db->prepare("INSERT INTO article(nom_article,contenu_article)VALUES(?,?)");
//         $req->bindParam(1, $name);
//         $req->bindParam(2, $content);
//         $req->execute();    
//     }
//     ?>













?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="bonjour.php" method="post">
        <input type="texte" name="nom_article">
        <input type="texte" name="contenu_article">
        <input type="submit" value="envoyer">
    </form>
    
</body>
</html>