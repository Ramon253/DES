<?php
/*Anotacion: En all el codigo me refiero a cada linea metida en el textarea como command*/
//funciones para obtener el texto del textarea y devolver un array asociativo
//----------------------------------------------------------------------------
function getCommands($inputString): array
{
    $inputString = explode("\n", $inputString);
    $commands = [];
    foreach ($inputString as $inputCommand) {
        if (trim($inputCommand) === "")
            continue;
        $commands[] = explode('-', trim($inputCommand));
    }

    return $commands;

}

function getSons($inputString): array
{
    $commands = getCommands($inputString);
    $sons = [];
    foreach ($commands as $command) {
        $sons[] = [
            "name" => $command[0],
            "age" => $command[1],
            "gender" => $command[2],
            "isMinusvalid" => strtolower($command[3]) === "s"
        ];
    }
    return $sons;
}


function getResidences($inputString): array
{
    $commands = getCommands($inputString);
    $residences = [];
    foreach ($commands as $command) {
        $residences[] = [
            "province" => $command[0],
            "habitantsNum" => $command[1],
            "floor" => $command[2],
            "isFrequentlyUsed" => $command[3]
        ];
    }
    return $residences;
}

//--------------------------------------------------------------------------

function cumpleDomicilio($inputString): array
{
    $houses = getResidences($inputString);

    return [
        "condition1" => checkProvince($houses) || checkFrequency($houses),
        "condition2" => count($houses) <= 2
    ];
}

function cumpleHijos($inputString)
{
    $sons = getSons($inputString);


    $avg = 0;
    $condition = false;
    $sonsUnderEight = 0;
    foreach ($sons as $son) {
        $avg += $son["age"];
    }

    foreach ($sons as $son) {
        if ($son["isMinusvalid"]) {
            $condition = true;
            break;
        }

        if (intval($son["age"]) < 8) {
            $sonsUnderEight++;
            if ($sonsUnderEight >= 2) {
                $condition = true;
                break;
            }
        }
    }

    $avg = $avg / count($sons);

    return [
        "condition" => $condition,
        "avg" => $avg
    ];
}

//funcion que comprueba que solo sea una provincia
function checkProvince($commands): bool
{
    $prevProvince = $commands[0]["province"];
    foreach ($commands as $command) {
        if ($prevProvince !== $command["province"]) {
            return false;
        }
    }
    return true;
}

//funcion que combrueba si la casa es habitualmente usada
function checkFrequency($commands)
{
    foreach ($commands as $command) {
        if (strtolower($command["isFrequentlyUsed"]) !== 's') {
            return false;
        }
    }
    return true;
}

function checkSalary($salary): bool
{
    return $salary >= 10000 && $salary < 30000;
}

//Comprueba si esta casado y es mayor de 35
function checkAgeIsMarried($age, $state): bool
{
    if (intval($age) < 35)
        return false;

    if ($state !== 'married')
        return false;

    return true;
}

//Funcion que devuelve la clase del elemento html si es verde o rojo

function printCondition($condition)
{
    if ($condition)
        return 'approved';

    return 'denied';
}