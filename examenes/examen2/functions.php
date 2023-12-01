<?php
require('./consts.php');


//Con Toms me refiero a tomos
function getStockPerProvince($toms, $collectionist = false, $tomName = ""): array
{
    //recorro para cargar en el array asociativo
    $stockPerProvince = [];
    foreach ($toms as $tom) {
        //pillo el nombre de la provincia que el ultimo valor del array
        $province = trim(array_pop($tom));

        //Si coleccionist es true solo sumara los de edicion colleccionista (esto me va aservir con otra funcion)
        if ($collectionist)
            if (strtolower($tom[5]) !== 's') continue;

        //si agregas un $tomName  se sumara solo el stock que coincida con ese nombre
        if ($tomName !== "") {
            if (!str_contains($tom[1], $tomName) && !str_contains($tom[0], $tomName)) {
                print "$tom[0] ==   > $tomName ";
                continue;
            }
        }

        //si ya se ha añadido al array se suma si no se añade
        if (array_key_exists($province, $stockPerProvince)) {
            $stockPerProvince[$province] += intval($tom[3]);
        } else
            $stockPerProvince[$province] = intval($tom[3]);
    }
    return $stockPerProvince;
}

//Esta funcion toma los tomos como el texto compreto y devuelve un array con cada tomo
function getToms($toms): array
{
    //Separo los tomos
    $allToms = preg_split("/\n/", $toms);
    $toms = [];
    foreach ($allToms as $tom) {
        //Comprueba los espacios en blanco
        if (trim($tom) === "") continue;
        //separo los tomos en partes (nombre, stock etc)
        $untrimmedToms = explode(",", $tom);
        $trimmedTom = [];

        //Hgo que se guarden sin espacios
        foreach ($untrimmedToms as $untrimmedTom)
            $trimmedTom[] = trim($untrimmedTom);

        $toms[] = $trimmedTom;
    }

    return $toms;
}

function getTotalStock($toms): int
{
    $totalStock = 0;
    foreach ($toms as $tom) {
        $totalStock += intval($tom[3]);
    }
    return $totalStock;
}

function getXslStock($toms): int
{
    $numOfXsl = 0;

    foreach ($toms as $tom) {
        //Si no se cumplen las 2 condiciones de XSl no se suma al contador
        if (intval($tom[2]) <= 300) continue;
        if (strtolower($tom[5]) !== 's') continue;
        $numOfXsl++;
    }

    return $numOfXsl;
}

function hasColleccionistStock($toms): bool
{
    $stockPerProvince = getStockPerProvince($toms, true);
    
    if (array_key_exists("isPhysic", $_POST))
        if ($_POST["isPhysic"] === 0)
            return false;


    if (count($stockPerProvince) !== 8) return false;

    foreach ($stockPerProvince as $stock) {
        if ($stock < 10) return false;
    }
    //si llega hasta aqui es que el stock es superior a 10
    return true;
}

//Funcion que devuelve las provincias colindantes
function getCloseProvinces($province): array
{
    $closeProvinces = [];
    switch ($province) {
        case 'Cádiz':
        {
            $closeProvinces = ["Sevilla", "Huelva", "Málaga"];
            break;
        }
        case "Huelva":
        {
            $closeProvinces = ["Cádiz", "Sevilla"];
            break;
        }
        case "Sevilla":
        {
            $closeProvinces = ["Huelva", "Cádiz", "Córdoba", "Málaga"];
            break;
        }
        case "Córdoba":
        {
            $closeProvinces = ["Sevilla", "Málaga", "Granada", "Jaén"];
            break;
        }
        case "Málaga":
        {
            $closeProvinces = ["Cádiz", "Sevilla", "Córdoba", "Granada"];
            break;
        }
        case "Jaén" :
        {
            $closeProvinces = ["Córdoba", "Granada"];
            break;
        }
        case "Granada":
        {
            $closeProvinces = ["Córdoba", "Málaga", "Jaén", "Almería"];
            break;
        }

        case "Almería" :
        {
            $closeProvinces = ["Granada"];
            break;
        }
    }

    return $closeProvinces;
}

function isClose($toms, $province): bool
{

    $closeProvinces = getCloseProvinces($province);
    $stockPerProvince = getStockPerProvince($toms);

    //Recorro todas las provincias que no son colindantes
    foreach (array_diff(PROVINCES, $closeProvinces) as $farProvince) {
        if (array_key_exists($farProvince, $stockPerProvince)) {
            if ($stockPerProvince[$farProvince] !== 0) return false;
        }
    }

    return true;
}

function getCloseStock($toms, $province, $mangaName): int
{
    $closeProvinces = getCloseProvinces($province);
    $stockPerProvince = getStockPerProvince($toms, false, $mangaName);
    $stock = 0;

    foreach ($stockPerProvince as $key => $item) {
        print " $key --> $item";
    }
    foreach ($closeProvinces as $closeProvince) {
        if (array_key_exists($closeProvince, $stockPerProvince)) {
            print $stockPerProvince[$closeProvince];
            $stock += $stockPerProvince[$closeProvince];
        }
    }
    if (array_key_exists($province, $stockPerProvince)) {
        $stock += $stockPerProvince[$province];
    }
    return $stock;
}