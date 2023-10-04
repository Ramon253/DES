<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="ejercicio10Style.css">
    <title>Document</title>
</head>
<body style="text-align: center">

<?php
/*Uso arays para cargar los datos de forma comoda, esto se
podria sustituir por variables separadas*/
$student1 = array(
    "name" => $_POST["studentName1"],
    "subject1" => $_POST["student1Subject1"],
    "subject2" => $_POST["student1Subject2"],
    "subject3" => $_POST["student1Subject3"],
    "grade1" => floatval($_POST["student1Grade1"]),
    "grade2" => floatval($_POST["student1Grade2"]),
    "grade3" => floatval($_POST["student1Grade3"])
);

/*Esta validacion es para que si no se entrega nombre en el form aparezca algo por lo menos en vez
de texto vacio*/
if ($student1["name"] == null) {
    $student1["name"] = "Estudiante 1";
}

$student2 = array(
    "name" => $_POST["studentName2"],
    "subject1" => $_POST["student2Subject1"],
    "subject2" => $_POST["student2Subject2"],
    "subject3" => $_POST["student2Subject3"],
    "grade1" => floatval($_POST["student2Grade1"]),
    "grade2" => floatval($_POST["student2Grade2"]),
    "grade3" => floatval($_POST["student2Grade3"])
);

if ($student2["name"] == null) {
    $student2["name"] = "Estudiante 2";
}

$student3 = array(
    "name" => $_POST["studentName3"],
    "subject1" => $_POST["student3Subject1"],
    "subject2" => $_POST["student3Subject2"],
    "subject3" => $_POST["student3Subject3"],
    "grade1" => floatval($_POST["student3Grade1"]),
    "grade2" => floatval($_POST["student3Grade2"]),
    "grade3" => floatval($_POST["student3Grade3"])
);

if ($student3["name"] == null) {
    $student3["name"] = "Estudiante 3";
}

$student4 = array(
    "name" => $_POST["studentName4"],
    "subject1" => $_POST["student4Subject1"],
    "subject2" => $_POST["student4Subject2"],
    "subject3" => $_POST["student4Subject3"],
    "grade1" => floatval($_POST["student4Grade1"]),
    "grade2" => floatval($_POST["student4Grade2"]),
    "grade3" => floatval($_POST["student4Grade3"])
);

if ($student4["name"] == null) {
    $student4["name"] = "Estudiante 4";
}

$student5 = array("name" => $_POST["studentName5"],
    "subject1" => $_POST["student5Subject1"],
    "subject2" => $_POST["student5Subject2"],
    "subject3" => $_POST["student5Subject3"],
    "grade1" => floatval($_POST["student5Grade1"]),
    "grade2" => floatval($_POST["student5Grade2"]),
    "grade3" => floatval($_POST["student5Grade3"])
);

if ($student5["name"] == null) {
    $student5["name"] = "Estudiante 5";
}

$avg1 = round(($student1["grade1"] + $student1["grade2"] + $student1["grade2"]) / 3, 1);
$avg2 = round(($student2["grade1"] + $student2["grade2"] + $student2["grade2"]) / 3, 1);
$avg3 = round(($student3["grade1"] + $student3["grade2"] + $student3["grade2"]) / 3, 1);
$avg4 = round(($student4["grade1"] + $student4["grade2"] + $student4["grade2"]) / 3, 1);
$avg5 = round(($student5["grade1"] + $student5["grade2"] + $student5["grade2"]) / 3, 1);


?>
<h1>Notas medias</h1>
<div class="container" id="result">
    <div>
        <h2><?php echo $student1["name"] ?></h2>
        <h3>Nota media : <?php echo $avg1 ?></h3>
    </div>
    <div>

        <h2><?php echo $student2["name"] ?></h2>
        <h3>Nota media : <?php echo $avg2 ?></h3>
    </div>
    <div>
        <h2><?php echo $student3["name"] ?></h2>
        <h3>Nota media : <?php echo $avg3 ?></h3>
    </div>
    <div>
        <h2><?php echo $student4["name"] ?></h2>
        <h3>Nota media : <?php echo $avg4 ?></h3>
    </div>
    <div>
        <h2><?php echo $student5["name"] ?></h2>
        <h3>Nota media : <?php echo $avg5 ?></h3>
    </div>
</div>
</body>
</html>

