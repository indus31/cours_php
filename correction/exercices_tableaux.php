<html>
    <head>
        <title>PHP - Exercices tableaux</title>
    </head>
    <body>
        <h1>PHP - Exercices tableaux</h1>
        <h2>Exercice 1</h2>
        <?php
            /*
            - Générez un tableau de longueur 50 en injectant des valeurs aléatoires comprises entre -100 et 100
            - Une fois les données injectées, affichez la taille du tableau
            */

            $arraySize = 50;
            $array = [];

            for ($i = 0; $i < $arraySize; $i++) {
                $array[] = rand(-100, 100);
            }

            // var_dump($array);

            echo "<p>La taille du tableau créé est :  " . count($array) . '</p>';
        ?>

        <h2>Exercice 2</h2>
        <?php
            /*
            - Créer une fonction qui affiche la valeur la plus grande du tableau (from scratch puis en utilisant une fonction interne à PHP).
            */

            function getMaxValue(array $tab):int
            {
                $maxValue = null;

                foreach ($tab as $val) {
                    if ($maxValue === null || $val > $maxValue) {
                        $maxValue = $val;
                    }
                }

                return $maxValue;
            }
            
            echo "<p>La valeur maximale du tableau est : " . getMaxValue($array) . '</p>';

            echo '<p>En utilisant la fonction native de PHP, on obtient la valeur maximale d\'un tableau en utilisant la fonction "max()" : ' . max($array) . '</p>';

        ?>

        <h2>Exercice 3</h2>
        <?php
            /*
            - Créer une fonction qui affiche la moyenne du tableau.
            */

            function getArrayAverage(array $tab):float
            {
                return array_sum($tab) / count($tab);
            }
            
            echo "<p>La valeur moyenne du tableau est : " . getArrayAverage($array) . '</p>';
        ?>

        <h2>Exercice 4</h2>
        <?php
            /*
            - Créer une fonction qui affiche la valeur la plus petite du tableau (from scratch puis en utilisant une fonction interne à PHP).
            */

            function getMinValue(array $tab):int
            {
                $minValue = null;

                foreach ($tab as $val) {
                    if ($minValue === null || $val < $minValue) {
                        $minValue = $val;
                    }
                }

                return $minValue;
            }
            
            echo "<p>La valeur minimale du tableau est : " . getMinValue($array) . '</p>';

            echo '<p>En utilisant la fonction native de PHP, on obtient la valeur minimale d\'un tableau en utilisant la fonction "min()" : ' . min($array) . '</p>';

        ?>
    </body>
</html>