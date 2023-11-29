<?php
/*
getDates($_POST["date"], $_POST["time"]);*/
getDates("2020-12-12", "02:01");
function getDates($date, $time)
{
    $weekend = ["Sat" => true, "Sun" => true];
    $daysOfWeek = [
        "Sun" => 'Domingo',
        "Mon" => 'Lunes',
        "Tue" => 'Martes',
        "Wed" => 'Miércoles',
        "Thu" => 'Jueves',
        "Fri" => 'Viernes',
        "Sat" => 'Sábado'
    ];
    $userBirthday = new DateTime($date . $time);
    $timeUntilChristmas = getNextChristmas();
    $timeUntilEaster = getNextEaster();
    $season = getSeason();
    $name = $_POST["name"];

    print "Bienvenido $name ,";
    print "estás en $season ";
    print "Quedan $timeUntilChristmas->days dias para las vacaciones de navidad y ";
    print "$timeUntilEaster->days dias $timeUntilEaster->h horas para vacaciones de semana santa del año que viene."; //TODO

    print "Tu cumpleaños ";
    if ($weekend[$userBirthday->format("D")])
        print "Cae";
    print " en finde y es el dia ";
    print   $daysOfWeek[$userBirthday->format("D")] . ", " . $userBirthday->format("d");

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

function getNextEaster(): DateInterval
{
    $curDate = new DateTime();
    $easter = new DateTime("March 24");

    if ($curDate > $easter)
        date_modify($easter, "+1 year");

    return date_diff($curDate, $easter);

}

