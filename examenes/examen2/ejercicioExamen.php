<?php
require('./functions.php');
$toms = getToms($_POST["toms"]);
$province = $_POST["province"];
print "Número de Volumenes Totales : " . getTotalStock($toms);
print "<br> Cantidad de Unidades XLS Disponibles(Más de 300pag y ed colecionista): " . getXslStock($toms);
print "<br> Hay Stock Colecionista : ";
if (hasColleccionistStock($toms))
    print "True";
else print "false";

print "<br>Stock por provincia";
foreach (getStockPerProvince($toms) as $provinces => $stock) {
    print "<br>$provinces   : $stock";
}

print "<br> Cumple cercania : ";
if (isClose($toms, $province)) {
    print "True";
} else print "False";


print "<br> Stock del tomo : one piece ".getCloseStock($toms, $province, "one piece");

