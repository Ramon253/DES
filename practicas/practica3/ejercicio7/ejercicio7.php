<?php
date_default_timezone_set("Europe/Madrid");
getDates($_POST["date"], $_POST["time"]);

function getDates($date, $time)
{

    $userBirthday = date_create($date . $time);
    $timeUntilChristmas = getNextChristmas();
    $timeUntilEaster = getNextEaster();
    $name = $_POST["name"];
    print "Easter <br>";
    print "$timeUntilEaster->d dias/$timeUntilEaster->m meses/$timeUntilEaster->y años <br>";
    print "Christmas <br>";
    print "$timeUntilChristmas->d dias/$timeUntilChristmas->m meses/$timeUntilChristmas->y años <br>";
    print date_format($userBirthday, "d/m/Y H:i ") . '<br>';

}

function getSeason()
{


}

function getNextChristmas(): DateInterval
{
    $curDate = new DateTime();
    $christmas = new DateTime("12/ 25");

    if ($curDate > $christmas)
        date_modify($christmas, "+1 year");


    return date_diff($curDate, $christmas);
}

function getNextEaster():DateInterval{
    $curDate = new DateTime();
    $easter = new DateTime("March 24");

    if ($curDate > $easter)
        date_modify($easter, "+1 year");

    return date_diff($curDate, $easter);

}

