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
const CARDS = [
    "clubs" => ['A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'],
    "diamonds" => ['A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'],
    "hearts" => ['A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'],
    "spades" => ['A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K']
]
?>
<form action="ejercicio8.php" method="post">
    <label for="firstCard">Primera carta</label>
    <select name="firstCard" id="firstCard">
        <?php
        for ($i = 0; $i < count(CARDS); $i++){
            $family = array_keys(CARDS);
            $cards = CARDS[$family[$i]];
            foreach ($cards as $card){
                echo '<option value="'.$card." ".$family[$i].'">'.$card." ".$family[$i].'</option>';
            }
        }
        ?>
    </select>
    <label for="secondCard">Segunda carta</label>
    <select name="secondCard" id="secondCard">
        <?php
        for ($i = 0; $i < count(CARDS); $i++){
            $family = array_keys(CARDS);
            $cards = CARDS[$family[$i]];
            foreach ($cards as $card){
                echo '<option value="'.$card." ".$family[$i].'">'.$card." ".$family[$i].'</option>';
            }
        }
        ?>
    </select>
    <label for="thirdCard">Tercera carta</label>
    <select name="thirdCard" id="thirdCard">
        <?php
        for ($i = 0; $i < count(CARDS); $i++){
            $family = array_keys(CARDS);
            $cards = CARDS[$family[$i]];
            foreach ($cards as $card){
                echo '<option value="'.$card." ".$family[$i].'">'.$card." ".$family[$i].'</option>';
            }
        }
        ?>
    </select>
    <label for="forthCard">Cuarta carta</label>
    <select name="forthCard" id="forthCard">
        <?php
        for ($i = 0; $i < count(CARDS); $i++){
            $family = array_keys(CARDS);
            $cards = CARDS[$family[$i]];
            foreach ($cards as $card){
                echo '<option value="'.$card." ".$family[$i].'">'.$card." ".$family[$i].'</option>';
            }
        }
        ?>
    </select>
    <label for="fithCard">Quinta carta</label>
    <select name="fithCard" id="fithCard">
        <?php
        for ($i = 0; $i < count(CARDS); $i++){
            $family = array_keys(CARDS);
            $cards = CARDS[$family[$i]];
            foreach ($cards as $card){
                echo '<option value="'.$card." ".$family[$i].'">'.$card." ".$family[$i].'</option>';
            }
        }
        ?>
    </select>
</form>
</body>
</html>
<?php
