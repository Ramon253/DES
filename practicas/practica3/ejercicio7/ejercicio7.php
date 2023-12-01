<?php

getDates($_POST["date"], $_POST["time"]);

function getDates($date, $time)
{
    $daysOfWeek = [
        "Sun" => 'Domingo',
        "Mon" => 'Lunes',
        "Tue" => 'Martes',
        "Wed" => 'Miércoles',
        "Thu" => 'Jueves',
        "Fri" => 'Viernes',
        "Sat" => 'Sábado'
    ];
    $months = [
        "Jan" => "Enero",
        "Feb" => "Febrero",
        "Mar" => "Marzo",
        "Apr" => "Abril",
        "May" => "Mayo",
        "Jun" => "Junio",
        "Jul" => "Julio",
        "Aug" => "Agosto",
        "Sep" => "Septiembre",
        "Oct" => "Octubre",
        "Nov" => "Noviembre",
        "Dec" => "Diciembre",
    ];

    print $daysOfWeek["Thu"];
    $userBirthday = date_create($date . $time);
    print $userBirthday->format("d/m/Y") . "<br>";
    $timeUntilChristmas = getNextChristmas();
    $timeUntilEaster = getNextEaster();
    $easterYear = $timeUntilEaster["year"];
    $timeUntilEaster = $timeUntilEaster["timeUntilEaster"];
    $season = getSeason();
    $name = $_POST["name"];


    print "Bienvenido $name ,";
    print "estás en $season ";
    print "Quedan $timeUntilChristmas->days dias para las vacaciones de navidad y ";
    print "$timeUntilEaster->days dias $timeUntilEaster->h horas para vacaciones de semana santa ";
    if ($easterYear === intval(date("Y"))){
        print " de este año ";
    }else
        print " del año que viene ";

    print "Tu cumpleaños ";
    if (intval($userBirthday->format("N")) <= 5 )
        print "no";

    print " cae en finde y es el dia ";
    print   $daysOfWeek[$userBirthday->format("D")] . ", " . $userBirthday->format("d") . " de " . $months[$userBirthday->format("M")] . " del " . $userBirthday->format("y");

}

function getSeason($date = new DateTime())
{
    $seasons = [
        "Primavera" => new DateTime("March 20"),
        "Verano" => new DateTime("June 20"),
        "Fall" => new DateTime("September 20"),
        "Invierno" => new DateTime("December 22"),
    ];
    $curDate = $date;

    foreach ($seasons as $seasonName => $season) {
        if ($season < $curDate && $curDate < next($seasons))
            return ($seasonName === "Fall") ? 'Otoño' : $seasonName;
    }
    return array_key_last($seasons);
}

function getNextChristmas(): DateInterval
{
    $curDate = new DateTime();
    $christmas = new DateTime("December 25");

    if ($curDate > $christmas)
        date_modify($christmas, "+1 year");


    return date_diff($curDate, $christmas);
}

function getNextEaster(): Array
{
    $curDate = new DateTime();
    $easter = new DateTime("March 24");

    if ($curDate > $easter)
        date_modify($easter, "+1 year");

    return [
        "timeUntilEaster" => date_diff($curDate, $easter),
        "year" => intval($easter->format("Y"))
    ];

}

