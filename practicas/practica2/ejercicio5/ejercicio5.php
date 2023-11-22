<?php
require("consts.php");

//Array asociativo principal
$character = [
    "Name" => $_POST["name"],
    "Race" => $_POST["races"],
    "Classes" => $_POST["classes"]
];

//Cargo y compruebo las caracteristicas
$media = 0;
foreach (CHARACTERISTICS as $characteristic) {
    $character[$characteristic] = $_POST[$characteristic];
    if ($character[$characteristic] > 20) {
        header("Location: index.php?=Each characteristic must be less tha 20");
        exit();
    }
    $media += $character[$characteristic];
}

if ($media / 6 > 15) {
    header("Location: index.php?message=The average of the characteristics must be less than 15");
    exit();
}
//Array asociativo del resto de datos
$characterAttributes = [
    "Background" => $_POST["background"],
    "Alignment" => $_POST["alignment"],
    "ExpPoints" => $_POST["exp"],
    "Age" => $_POST["age"],
    "Weight" => $_POST["weight"],
    "Height" => $_POST["height"],
    "HairColor" => $_POST["hairColor"],
    "SkinColor" => $_POST["skinColor"],
    "EyesColor" => $_POST["eyesColor"]
];


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../imgs/icon/dndIcon.png">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="../css/ejercicio5.css">
    <style>
        #SkinColor {
            background-color: <?= $characterAttributes["SkinColor"]?>;
        }

        #EyesColor {
            background-color: <?= $characterAttributes["EyesColor"]?>;
        }

        #HairColor {
            background-color: <?= $characterAttributes["HairColor"]?>;
        }
    </style>
</head>
<body>
<main class="charSheet">
    <div class="container">
        <h1>D&D</h1>
        <div class="baseStatsContainer">
            <header>
                <?php
                //saco por pantalla las cosas en el orden que quiero
                foreach ($character as $statName => $stat) {
                    if (in_array($statName, CHARACTERISTICS))
                        continue;

                    echo '<h2 class="' . $statName . '">';
                    if ($statName === "Classes") {
                        echo 'Primary class : ' . $stat[0];

                        echo '</h2>';
                        if (!empty($stat[1])) {
                            echo '<h2 class="' . $statName . '">';
                            echo '  Secondary class : ' . $stat[1];
                            echo '</h2>';
                        }
                        continue;
                    } else

                        echo $statName . ' : ' . $stat;

                    echo '</h2>';
                }
                echo '</header>'
                ?>
                <div class="imgContainer">
                    <?php
                    //Cargo la imagen
                    if ($character["Race"] === "Human" || $character["Race"] === "Dwarf") {
                        echo '<img src="../imgs/d&d/' . $character["Race"] . '/' . $character["Race"] . $character["Classes"][0] . '.png" alt="' . $character["Race"] . $character["Classes"][0] . '">';
                    } else {
                        echo '<img src="../imgs/d&d/' . $character["Race"] . '.webp" alt="ns">';
                    }
                    ?>
                </div>

                <div class="characteristic">
                    <?php
                    foreach (CHARACTERISTICS as $characteristic) {
                        echo '<h2>';
                        echo $characteristic . ' : ' . $character[$characteristic];
                        echo '</h2>';
                    }
                    ?>
                </div>
        </div>

        <div class="AttributesContainer">
            <?php
            foreach ($characterAttributes as $attName => $attribute) {
                if ($attName === "Background") {
                    echo '<div id="' . $attName . '">';
                    echo '<h2>' . $attName . ' : </h2><br> <p>' . $attribute . '</p>';
                    echo '</div>';
                    continue;
                }
                echo '<h2 id="' . $attName . '">' . $attName . ' : ' . $attribute . '</h2>';
            }
            ?>

        </div>
    </div>
</main>

</body>
</html>
