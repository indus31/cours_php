<?php
    if (isset($_POST['nb1']) && isset($_POST['nb2']) && isset($_POST['op'])) {
        $erreurs = [];

        if (!is_numeric(($nb1 = $_POST['nb1'])) || !is_numeric(($nb2 = $_POST['nb2']))) {
            $erreurs[] = "Les paramètres nb1 et nb2 doivent être de type numérique.";
        }

        if (empty($erreurs)) {
            $nb1 = (float)$nb1;
            $nb2 = (float)$nb2;

            $result = null;

            switch($_POST['op']) {
                case '+':
                    $result = $nb1 + $nb2;
                    break;
                case '-':
                    $result = $nb1 - $nb2;
                    break;
                case '*':
                    $result = $nb1 * $nb2;
                    break;
                case '/':
                    if ($nb2 == 0) {
                        $erreurs[] = "Division par 0 impossible";
                    } else {
                        $result = $nb1 / $nb2;
                    }
                    break;
                case '%':
                    $result = $nb1 % $nb2;
                    break;
                default:
                    $erreurs[] = "L'opérateur est incorrect";
            }
        }

        if (!empty($erreurs)) {
            echo "<ul>";
            foreach($erreurs as $erreur) {
                echo "<li>$erreur</li>";
            }
            echo "</ul>";
        } else {
            echo "<h2>$nb1 " . $_POST['op'] . " $nb2 = $result</h2>";
        }
    }