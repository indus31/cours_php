<html>
    <head>
        <title>PHP - Exercices superglobales 1</title>
    </head>
    <body>
        <h1>PHP - Exercices superglobales 1</h1>

        <?php
            if (isset($_POST['number1']) && isset($_POST['number2'])) {
                $nb1 = (int)$_POST['number1'];
                $nb2 = (int)$_POST['number2'];

                echo "<p>La somme est égale à : " . $nb1 + $nb2 . "</p>";
            } else {
        ?>
        <form action="exercices_superglobales_post_1.php" method="post">
            <div>
                <label for="number1">Number 1 : </label>
                <input type="number" name="number1" />
            </div>
            <div>
                <label for="number2">Number 2 : </label>
                <input type="number" name="number2" />
            </div>
            <div>
                <input type="submit" value="Valider" />
            </div>
        </form>
        <?php } ?>
    </body>
</html>
