<?php
$numbers = $_POST["numbers"];
$useFunc = $_POST["useFunc"];


/*Con funciones*/
function textToNumbersFunc($text): array
{
    $numbers = preg_split("/[^0-9]+/", $text);

    if ($numbers[count($numbers) - 1] === '')
        array_pop($numbers);
    if ($numbers[0] === '')
        array_shift($numbers);

    return $numbers;

}

function processNumbersFunc($text, $order = true)
{
    $numbers = textToNumbersFunc($text);
    $primeNumbers = getPrimes($numbers);
    $avg = array_sum($numbers) / count($numbers);
    $min = min($numbers);

    if ($order)
        return [
            "nprimos" => $primeNumbers,
            "media" => $avg,
            "minimo" => $min
        ];

    return [
        "minimo" => $min,
        "media" => $avg,
        "nprimos" => $primeNumbers
    ];
}

/*Sin funciones*/
function textToNumbers($text): array
{
    $numbers = [];
    $number = "";
    $prevPos = "";
    for ($i = 0; $i < strlen($text); $i++) {
        if (!is_numeric($text[$i])) {
            if (!is_numeric($prevPos)) {
                $prevPos = $text[$i];
                continue;
            }
            $numbers[] = intval($number);
            $prevPos = $text[$i];
            $number = "";
            continue;
        }
        $number .= $text[$i];
        $prevPos = $text[$i];
    }

    if (is_numeric($text[strlen($text) - 1]))
        $numbers[] = $number;

    return $numbers;
}

function isPrime($number): bool
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) return false;
    }
    return true;
}

function getPrimes($numbers): array
{
    $primeNumbers = [];
    foreach ($numbers as $number) {
        if (isPrime($number))
            $primeNumbers[] = $number;
    }
    return $primeNumbers;
}

function getMin($numbers): int
{
    $min = $numbers[0];
    foreach ($numbers as $number) {
        if ($number < $min)
            $min = $number;
    }

    return $min;
}

function getAvg($numbers): float|int
{
    $avg = 0;
    foreach ($numbers as $number) {
        $avg += $number;
    }
    return $avg / count($numbers);
}

function processNumbers($text, $order = true): array
{
    $numbers = textToNumbers($text);
    $primeNumbers = getPrimes($numbers);
    $avg = getAvg($numbers);
    $min = getMin($numbers);

    if ($order)
        return [
            "nprimos" => $primeNumbers,
            "media" => $avg,
            "minimo" => $min
        ];

    return [
        "minimo" => $min,
        "media" => $avg,
        "nprimos" => $primeNumbers
    ];
}

if ($useFunc === 1)
    $numbers = processNumbersFunc($numbers);
else
    $numbers = processNumbers($numbers, false);

foreach ($numbers as $key => $number) {
    echo "______________________________ <br>";
    echo $key . "<br>";
    if ($key === "media" || $key === "minimo") {
        echo $number . "<br>";
        continue;
    }
    foreach ($numbers[$key] as $displayNumber) {
        echo '|' . $displayNumber . '|<br>';
    }
}
