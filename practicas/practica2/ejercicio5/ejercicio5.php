<?php
require("consts.php");

$character = [
    "name" => $_POST["name"],
    "race" => $_POST["races"]
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

$characterAttributes = [
    "background" => $_POST["background"],
    "alignment" => $_POST["alignment"],
    "expPoints" => $_POST["exp"],
    "age" => $_POST["age"],
    "weight" => $_POST["weight"],
    "height" => $_POST["height"],
    "hairColor" => $_POST["hairColor"],
    "skinColor" => $_POST["skinColor"],
    "eyesColor" => $_POST["eyesColor"]
];


$cont = 0;
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
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="../css/ejercicio5.css">
</head>
<body>


<?php
if ($character["race"] === "Human" || $character["race"] === "Dwarf") {

    foreach ($character as $characterAtt) {
        echo $characterAtt . "<br>";
    }
    foreach ($characterAttributes as $characterAtt) {
        echo $characterAtt . "<br>";
    }
} else {
    echo '<img src="../imgs/d&d/' . $character["race"] . '/' . $character["race"] . $character["class0"] . '.png" alt="' . $character["race"] . $character["class0"] . '">';
    echo '<img src="../imgs/d&d/' . $character["race"] . '.webp" alt="ns">';
}
?>

</body>
</html>
