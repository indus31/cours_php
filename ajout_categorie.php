<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajout categorie</title>
</head>
<body>
<form action="ajout_categorie.php" method="post">
        <input type="texte" name="categorie_article">
        
        <input type="submit" value="envoyer">
    </form>










    <?php
    $hostName = "docker-lamp-mysql";

    $userName = "root";
    $password = "p@ssw0rd";
    $dbName = "articles";
    
    $conn = null;
    
    
    try{
        //on essaie de se connecter
        $conn = new PDO("mysql:host=$hostName;dbname=$dbName", $userName, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connexion réussie";
    
        if(isset($_POST["categorie_article"])){
    
            $name_categorie = $_POST["categorie_article"];
           
            $sql = "INSERT INTO categorie(nom_categorie)VALUES(?)";
            $req = $conn->prepare($sql);
            
    
            $req->bindParam(1,$name_categorie);
            $req->execute();
            echo "<p>".$name_categorie." a était ajouté a la table categorie"."</p>";
    
        }
    }
    catch(PDOException $e){
        echo "erreur : ".$e->getMessage();
    
    }
    
    
    
   



    
    ?>
</body>
</html>