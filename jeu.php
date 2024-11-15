<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jeu</title>
    <link rel="stylesheet" href="style_game.css">
</head>
<body>
    <h4>
    <?php
    session_start();
    
    if (!isset($_SESSION['multi'])) {
        // Initialisation du labyrinthe si la session n'existe pas
        $_SESSION['multi'] = array(
        array("O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "_"),
        array("O", "C", "O", "_", "_", "_", "_", "_", "_", "_", "O", "_", "_", "_", "_", "O", "_", "_", "_", "O", "_"),
        array("O", "_", "O", "_", "O", "O", "_", "_", "_", "_", "O", "_", "M", "_", "_", "O", "K", "O", "_", "O", "_"),
        array("O", "_", "O", "_", "_", "O", "_", "O", "O", "O", "O", "O", "O", "O", "_", "O", "O", "O", "_", "O", "_"),
        array("O", "_", "O", "_", "_", "O", "_", "_", "_", "_", "_", "O", "_", "_", "_", "_", "_", "_", "_", "O", "_"),
        array("O", "K", "_", "_", "_", "O", "_", "O", "O", "O", "_", "O", "_", "O", "O", "O", "O", "O", "O", "O", "_"),
        array("O", "O", "O", "O", "_", "O", "_", "_", "_", "O", "_", "O", "_", "_", "_", "_", "_", "_", "K", "O", "_"),
        array("O", "_", "_", "_", "_", "O", "_", "O", "_", "O", "_", "_", "_", "_", "O", "O", "O", "O", "O", "O", "_"),
        array("O", "_", "O", "K", "_", "O", "_", "O", "_", "O", "_", "O", "O", "_", "O", "_", "_", "_", "_", "_", "_"),
        array("O", "_", "O", "O", "O", "O", "_", "O", "_", "O", "_", "K", "O", "_", "O", "_", "_", "_", "_", "_", "_"),
        array("O", "_", "_", "_", "_", "_", "_", "O", "_", "O", "O", "O", "O", "_", "O", "O", "O", "O", "O", "O", "O"),
        array("O", "_", "_", "_", "_", "_", "E", "O", "_", "_", "M", "_", "_", "_", "_", "_", "_", "_", "_", "_", "D"),
        array("O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O"),
    );
    }
// Fonction pour réinitialiser la carte
function resetMap() {
    $_SESSION['multi'] = array(
        array("O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "_"),
        array("O", "C", "O", "_", "_", "_", "_", "_", "_", "_", "O", "_", "_", "_", "_", "O", "_", "_", "_", "O", "_"),
        array("O", "_", "O", "_", "O", "O", "_", "_", "_", "_", "O", "_", "M", "_", "_", "O", "K", "O", "_", "O", "_"),
        array("O", "_", "O", "_", "_", "O", "_", "O", "O", "O", "O", "O", "O", "O", "_", "O", "O", "O", "_", "O", "_"),
        array("O", "_", "O", "_", "_", "O", "_", "_", "_", "_", "_", "O", "_", "_", "_", "_", "_", "_", "_", "O", "_"),
        array("O", "K", "_", "_", "_", "O", "_", "O", "O", "O", "_", "O", "_", "O", "O", "O", "O", "O", "O", "O", "_"),
        array("O", "O", "O", "O", "_", "O", "_", "_", "_", "O", "_", "O", "_", "_", "_", "_", "_", "_", "K", "O", "_"),
        array("O", "_", "_", "_", "_", "O", "_", "O", "_", "O", "_", "_", "_", "_", "O", "O", "O", "O", "O", "O", "_"),
        array("O", "_", "O", "K", "_", "O", "_", "O", "_", "O", "_", "O", "O", "_", "O", "_", "_", "_", "_", "_", "_"),
        array("O", "_", "O", "O", "O", "O", "_", "O", "_", "O", "_", "K", "O", "_", "O", "_", "_", "_", "_", "_", "_"),
        array("O", "_", "_", "_", "_", "_", "_", "O", "_", "O", "O", "O", "O", "_", "O", "O", "O", "O", "O", "O", "O"),
        array("O", "_", "_", "_", "_", "_", "E", "O", "_", "_", "M", "_", "_", "_", "_", "_", "_", "_", "_", "_", "D"),
        array("O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O"),
    );
}

function findCharacter($multi) {
    foreach ($multi as $i => $row) {
        foreach ($row as $j => $cell) {
            if ($cell == "C") {
                return array($i, $j);
            }
        }
    }
    return false; // Si le personnage n'est pas trouvé
}

function moveCharacter(&$multi, $direction) {
    $charCoords = findCharacter($multi);

    if (!$charCoords) {
        return; // Personnage non trouvé
    }

    list($i, $j) = $charCoords;

    // Calculer les nouvelles coordonnées en fonction de la direction
    switch ($direction) {
        case "↑":
            ?>
            <audio id="myAudio" autoplay>
            <source src="mp3/mouv.mp3" type="audio/mp3">
            </audio>
            <?php
            $newI = $i - 1;
            $newJ = $j;
            break;
        case "↓":
            ?>
            <audio id="myAudio" autoplay>
            <source src="mp3/mouv.mp3" type="audio/mp3">
            </audio>
            <?php
            $newI = $i + 1;
            $newJ = $j;
            break;
        case "←":
            ?>
            <audio id="myAudio" autoplay>
            <source src="mp3/mouv.mp3" type="audio/mp3">
            </audio>
            <?php
            $newI = $i;
            $newJ = $j - 1;
            break;
        case "→":
            ?>
            <audio id="myAudio" autoplay>
            <source src="mp3/mouv.mp3" type="audio/mp3">
            </audio>
            <?php
            $newI = $i;
            $newJ = $j + 1;
            break;
        default:
            return; // Direction invalide
    }

    // Vérifier si les nouvelles coordonnées sont valides (dans les limites du tableau et pas un mur)
    if ($newI >= 0 && $newI < count($multi) && $newJ >= 0 && $newJ < count($multi[$newI]) && $multi[$newI][$newJ] !== "O") {
        // Effacer l'emplacement actuel du personnage
        $multi[$i][$j] = "_";

        // Vérifier si le personnage a récupéré la clé
        if ($multi[$newI][$newJ] === "K") {
            // Supprimer la clé de la carte
            $multi[$newI][$newJ] = "_";
        }
        $swordleft = false;
        foreach ($multi as $row) {
            if (in_array("E", $row)) {
                $swordleft = true;
            }
        }
        if ($multi[$newI][$newJ] === "M" && $swordleft === true) {
            header("Location: page_de_defaite.php");
        }

        // Mettre à jour la nouvelle position du personnage
        $multi[$newI][$newJ] = "C";

        // Vérifier y'a plus de clés ou de portes sur la carte
        $keysLeft = false;
        $doorsLeft = false;
        foreach ($multi as $row) {
            if (in_array("K", $row)) {
                $keysLeft = true;
            }
            if (in_array("D", $row)) {
                $doorsLeft = true;
            }
        }

        // Si aucune clé ni porte ne sont laissées, rediriger vers page_de_fin.php
        if (!$keysLeft && !$doorsLeft) {
            header("Location: page_de_fin.php");
            exit();
        }
    }

    // Mettre à jour la session avec le nouveau labyrinthe
    $_SESSION['multi'] = $multi;
}

function displayMaze($multi) {
    for ($i = 0; $i < count($multi); $i++) {
        for ($j = 0; $j < count($multi[$i]); $j++) {
            if ($multi[$i][$j] == "O") {
                echo '<img src="img/brique2.png" style="width: 50px; height: 50px;">';
            } elseif ($multi[$i][$j] == "_") {
                echo '<img src="img/sol2.png" style="width: 50px; height: 50px;">';
            } elseif ($multi[$i][$j] == "E") {
                echo '<img src="img/épée2.png" style="width: 50px; height: 50px;">';
            } elseif ($multi[$i][$j] == "K") {
                echo '<img src="img/key2.png" style="width: 50px; height: 50px;">';
            } elseif ($multi[$i][$j] == "C") {
                echo '<img src="img/warrior.png" style="width: 50px; height: 50px;">';
            }elseif ($multi[$i][$j] == "D") {
                echo '<img src="img/door.png" style="width: 50px; height: 50px;">';
            }elseif ($multi[$i][$j] == "M") {
                echo '<img src="img/mob.png" style="width: 50px; height: 50px;">';
            } else {
                echo $multi[$i][$j];
            }
        }
        echo "<br/>";
    }
}

// Réinitialiser la carte si le bouton est soumis
if (isset($_POST["reset"])) {
    resetMap();
}

// Déplacer le personnage si une direction est soumise
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["move"])) {
    $direction = $_POST["move"];
    moveCharacter($_SESSION['multi'], $direction);
}

// Afficher la carte
displayMaze($_SESSION['multi']);
?>

<!-- Formulaire pour les commandes de déplacement -->
<form method="post" action="">
    <input type="submit" name="move" value="↑">
    <br>
    <input type="submit" name="move" value="←">
    <input type="submit" name="move" value="→">
    <br>
    <input type="submit" name="move" value="↓">
    <br>
    <br>
    <input type="submit" name="reset" value="Recommencer">
</form></h4>

</body>
</html>