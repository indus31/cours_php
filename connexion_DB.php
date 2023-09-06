<?php
$hostName = "docker-lamp-mysql";
$userName = "root";
$password = "p@ssw0rd";
$dbName = "articles";

$conn = null;
try {
    $conn = new PDO("mysql:host=$hostName;dbname=$dbName", $userName, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajout article</title>
</head>

<body>
    <form action="connexion_DB.php" method="post">
        <input type="texte" name="nom_article">
        <input type="texte" name="contenu_article">
        <select name="selection">
            <option value=""></option>
            <?php

            $sql = "SELECT * FROM categorie";
            $req = $conn->prepare($sql);
            $req->execute();
            foreach ($req as $data) { ?>
                <?php echo '<option value="' . $data['id_categorie'] . '">' . $data['nom_categorie'] . '</option>';



            } ?>
        </select>
        <input type="submit" value="envoyer">
    </form>

</body>

</html>
<?php






try {
    if (isset($_POST["nom_article"]) && isset($_POST["contenu_article"])) {

        $name = $_POST["nom_article"];
        $content = $_POST["contenu_article"];
        $sql = "INSERT INTO article(nom_article,contenu_article,id_categorie)VALUES(?,?,?)";
        $req = $conn->prepare($sql);
        $id_categorie = null;
        if(!empty($_POST["selection"])){
            $id_categorie = $_POST["selection"];
        }

        $req->bindParam(1, $name);
        $req->bindParam(2, $content);
        $req->bindParam(3,$id_categorie);
        $req->execute();
        echo "<p>" . $name . " " . $content . " " . "</p>";

    }
}
//on capture les exceptions et on affiche les infos relative à celle-ci
catch (PDOException $e) {
    echo "erreur : " . $e->getMessage();

}
// finally{ pas obligatoire s'execute dans tout les cas a la fin, exception ou pas

// }

// die arrète le script, interessant quand on veux debbuggé et qu'on arrive pas à controler les bouts de codes suceptibles de poser problème

$conn = NULL;

?>







<?php
// count($_POST["nom_article"] < 50) // 
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
