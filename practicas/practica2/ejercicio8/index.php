<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 8</title>
</head>
<body>
<?php
const DECK = [
    "clubs" => [2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K', 'A'],
    "diamonds" => [2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K', 'A'],
    "hearts" => [2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K', 'A'],
    "spades" => [2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K', 'A']
];
const ORDER = ["Primera", "Segunda", "Tercera", "Cuarta", "Quinta"];

$family = array_keys(DECK);
?>

<form action="ejercicio8.php" method="post">
    <?php
    for ($j = 0; $j < 5; $j++) {
        echo ' <label for="' . ORDER[$j] . '">' . ORDER[$j] . ' carta</label>';
        echo ' <select name="' . ORDER[$j] . '" id="' . ORDER[$j] . '" >';

        for ($i = 0; $i < count(DECK); $i++) {
            $cards = DECK[$family[$i]];
            foreach ($cards as $card) {
                echo '<option value="' . $card . $family[$i] . '">' . $card . " " . $family[$i] . '</option>';
            }
        }

        echo "</select >";
    }
    ?>
    <button type="submit">Mandar</button>
</form>
</body>
</html>
<?php
