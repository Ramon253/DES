<?php
function descendingOrder(int $n): int
{
    // Replace with your code
    $result = 0;
    $exp = 1;
    $str = $n . "";
    $str = str_split($str);
    $numbers = [];

    foreach ($str as $c) {
        array_push($numbers, intval($c));
    }
    sort($numbers);

    foreach ($numbers as $n) {
        $result += $n * $exp;
        $exp *= 10;
    }
    return intval($result);

}

function excludingVatPrice($price)
{
    // your code
    return round(($price * 100 / 115), 2);
}

function getPlanetName($id){
    $name = "";

    switch ($id) {
        case 1:
            $name = 'Mercury';
            break;
        case 2:
            $name = 'Venus';
            break;
        case 3:
            $name = 'Earth';
            break;
        case 4:
            $name = 'Mars';
            break;
        case 5:
            $name = 'Jupiter';
            break;
        case 6:
            $name = 'Saturn';
            break;
        case 7:
            $name = 'Uranus';
            break;
        case 8:
            $name = 'Neptune';
    }

    return $name;
}
echo abs(-12);
echo getPlanetName(2);