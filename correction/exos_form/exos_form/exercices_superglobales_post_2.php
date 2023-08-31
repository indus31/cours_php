<html>
    <head>
        <title>PHP - Exercices superglobales 2</title>
    </head>
    <body>
        <h1>PHP - Exercices superglobales 2</h1>

        <?php
            if (isset($_POST['prixHT']) && isset($_POST['qte']) && isset($_POST['tva'])) {
                $prixTTC = (float)$_POST['prixHT'] * (int)$_POST['qte'] * (1 + (float)$_POST['tva']/100);

                echo "<p>Le prix TTC de votre commande est : $prixTTC" . "€</p>";
            } else {
        ?>
        <h2>Calcul de prix TTC</h2>
        <form action="exercices_superglobales_post_2.php" method="post">
            <div>
                <label for="prixHT">Prix HT : </label>
                <input type="number" step="0.01" name="prixHT" />
            </div>
            <div>
                <label for="qte">Quantité : </label>
                <input type="number" name="qte" />
            </div>
            <div>
                <label for="tva">Quantité : </label>
                <input type="number" step="0.01" name="tva" />
            </div>
            <div>
                <input type="submit" value="Valider" />
            </div>
        </form>
        <?php } ?>
    </body>
</html>
