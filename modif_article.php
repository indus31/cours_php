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
} ?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifier article</title>
</head>

<body>
    <?php
    var_dump($_GET);
    ?>
    <form action="modif_article.php" method="post">

        <select name="selectionArticle">
            <option value=""></option>
            <?php

            $sql = "SELECT * FROM article";
            $req = $conn->prepare($sql);
            $req->execute();
            foreach ($req as $data) { ?>
                <?php echo '<option value="' . $data['id_article'] . '">' . $data['nom_article'] . '</option>';

            }
            ?>
        </select>



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
        $sql = "UPDATE article SET nom_article=?,contenu_article=?,id_categorie=? WHERE id_article = ? ";
        $req = $conn->prepare($sql);
        $id_article = null;
        $id_categorie = null;
    }


    if (!empty($_POST["selectionArticle"])) {
        $id_article = $_POST["selectionArticle"];
    }
    if (!empty($_POST["selection"])) {
        $id_categorie = $_POST["selection"];
    }

    $req->bindParam(1, $name);
    $req->bindParam(2, $content);
    $req->bindParam(3, $id_categorie);
    $req->bindParam(4, $_GET['id_article']);
    $req->execute();
} catch (PDOException $e) {

    echo "erreur : " . $e->getMessage();
}




?>