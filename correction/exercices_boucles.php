<html>
    <head>
        <title>PHP - Exercices boucles</title>
    </head>
    <body>
        <h1>PHP - Exercices boucles</h1>
        <h2>Exercice 1</h2>
        <?php
            /*
             - Choisir un nombre compris entre 0 et 999
             - A l’aide d’une boucle while, effectuez des tirages aléatoires (utilisation de la fonction PHP « rand() » jusqu’à trouver le bon nombre. 
             - Affichez le nombre d’itérations nécessaires pour trouver le nombre 
             */
            function findNumber(int $a)
            {
                if ($a < 0 || $a > 999) {
                    echo "Le nombre doit être compris entre 0 et 999.<br>";
                    return;
                }

                $randomNumber = null;
                $countIterations = 0;

                while ($randomNumber !== $a) {
                    $countIterations++;
                    $randomNumber = rand(0,999);
                }

                echo "le nombre $a a été trouvé en $countIterations fois<br>";
            }

            findNumber(302);
            findNumber(30);
            findNumber(500);

            function findNumberV2(int $a)
            {
                $borneMin = 0;
                $borneMax = 999;

                if ($a < 0 || $a > 999) {
                    echo "Le nombre doit être compris entre 0 et 999.<br>";
                    return;
                }

                $randomNumber = null;
                $countIterations = 0;

                while ($randomNumber !== $a) {
                    $countIterations++;
                    $randomNumber = rand($borneMin,$borneMax);
                    if ($randomNumber < $a) {
                        $borneMin = $randomNumber;
                    }
                    if ($randomNumber > $a) {
                        $borneMax = $randomNumber;
                    }
                }

                echo "le nombre $a a été trouvé en $countIterations fois<br>";
            }

            echo "<br>";
            findNumberV2(302);
            findNumberV2(30);
            findNumberV2(500);
            findNumberV2(833);
        ?>

        <h2>Exercice 2</h2>
        <?php
            /*
            - Choisir un nombre de lignes
            - Choisir un nombre de colonnes
            - A l’aide de boucles « for », obtenez le résultat suivant : 
                0000000000
                1111111111
                2222222222
                3333333333
                4444444444
                5555555555
                6666666666
            */
            function afficheBloc():void
            {
                $row = 7;
                $col = 10;
                for ($i=0;$i<$row;$i++) {
                    for ($j=0;$j<$col; $j++) {
                        echo $i;
                    }
                    echo "<br>";
                }
            }

            afficheBloc();
        ?>

        <h2>Exercice 3</h2>
        <?php
            /*
            - Ecrivez des boucles qui affichent ce qui est demandé
            - Le nombre de colonne à afficher dépend du n° de ligne, à la ligne i, il faut afficher i colonnes.
            - Le résultat attendu est celui-ci :
            1
            22
            333
            4444
            55555
            666666
            7777777
            */

            function affichePyramide():void
            {
                $row = 8;
                $col = 10;
                for ($i=0;$i<$row;$i++) {
                    for ($j=0;$j<$i; $j++) {
                        echo $i;
                    }
                    echo "<br>";
                }
            }

            affichePyramide();

        ?>
    </body>
</html>