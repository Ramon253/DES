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
</head>
<body>
<main class="charSheet">
    <h1>D&D</h1>
    <div class="container">
        <div class="baseStatsContainer">
            <?php
            foreach ($character as $attName => $charAtt) {

                if (in_array($attName, CHARACTERISTICS)) {
                    echo '<div class ="characteristic">';
                } else echo '<div class ="' . $attName . '">';
                if ($attName === "class1")
                    echo '<h2>Primary class : '.$charAtt.'</h2>';
                elseif ($attName === "class2")
                    echo '<h2>Secondry class : '.$charAtt.'</h2>';
                else
                    echo '<h2>' . $attName . ' : ' . $charAtt . ' </h2>';
                echo '</div>';
            }
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
        </div>

        <div class="AttributesContainer">
            <?php
            foreach ($characterAttributes as $attName => $charAtt) {
                echo '<div class ="' . $attName . '">';
                echo '<h2>' . $attName . ': '.$charAtt.'</h2>';
                echo '</div>';
            }
            ?>

        </div>
    </div>
</main>
<script>
    document.getElementsByClassName("class1" || "class2")
</script>
</body>
</html>
