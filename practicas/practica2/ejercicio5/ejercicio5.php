<?php
require("consts.php");

$character = [
    "Name" => $_POST["name"],
    "Race" => $_POST["races"]
];
$media = 0;
foreach (CHARACTERISTICS as $characteristic) {
    $character[$characteristic] = $_POST[$characteristic];
    if ($character[$characteristic] > 20) {
        echo "Que hases bobo";
        return;
    }
    $media += $character[$characteristic];
}

if ($media / 6 > 15) {
    header("Location: index.php?message=Demasiada mierda");
}
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


$cont = 1;
$classes = array_diff($_POST, $characterAttributes, $character);
foreach ($classes as $class) {
    $character["class" . $cont++] = $class;
    if ($cont > 2) {
        break;
    }
}

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
        #SkinColor{
            background-color: <?= $characterAttributes["SkinColor"]?> ;
        }
        #EyesColor{
            background-color: <?= $characterAttributes["EyesColor"]?> ;
        }#HairColor{
            background-color: <?= $characterAttributes["HairColor"]?> ;
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
                foreach ($character as $statName => $stat) {

                    if (in_array($statName, CHARACTERISTICS))
                        continue;

                    echo '<h2 class="' . $statName . '">';
                    if ($statName === "class1")
                        echo 'Primary class : ' . $stat;
                    elseif ($statName === "class2")
                        echo 'Secondary class : ' . $stat;
                    else
                        echo $statName . ' : ' . $stat;

                    echo '</h2>';
                }
                echo '</header>'
                ?>
                <div class="imgContainer">
                    <?php
                    if ($character["Race"] === "Human" || $character["Race"] === "Dwarf") {
                        echo '<img src="../imgs/d&d/' . $character["Race"] . '/' . $character["Race"] . $character["class1"] . '.png" alt="' . $character["Race"] . $character["class1"] . '">';
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
