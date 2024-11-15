<?php

session_start();

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
// Rediriger vers la page d'accueil
header("Location: index.php");
exit();
}

// Réinitialiser la carte si le bouton est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["reset"])) {
    resetMap();
}

// Afficher le contenu de la page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>defaite</title>
    <link rel="stylesheet" href="style_index.css">
</head>
<body>
    <audio id="myAudio" autoplay >
    <source src="mp3/game_over.mp3" type="audio/mp3">
    </audio>
    <audio id="myAudio" autoplay loop>
        <source src="mp3/delayed_Legend of Zelda (NES) Intro.mp3" type="audio/mp3">
    </audio>
    <h1><img src="img/laby.png" alt="laby"></h1>
    <h2>
    LE DONJON SERA LA DERNIERE DEMEURE D'ATLAS ...
    </h2>

    <h3>    <!-- Formulaire pour réinitialiser la carte -->
    <form method="post" action="">
        <input type="submit" name="reset" value="page d'accueil">
    </form>
    <img src="img/dead.png" alt="fond" style="width: 1100px; height: 700px;">
    </h3>
</body>
</html>