<?php
date_default_timezone_set("Europe/Madrid");
/*$christmas = date_format(date_create("23-12-23"),"d/m/Y");
print $christmas.'<br>';*/
getDates($_POST["date"], $_POST["time"]);

function getDates($date, $time)
{
    $userDateTime = date_create($date . $time);
    //$time = date_create($time);
    $curDate = date_create();
    $year = intval(date_format($curDate,"Y"));
    //$time = date_format($time, "H:i");
    print date("d/m/Y H:i <br>")."<br>";
    print date_format($userDateTime ,"d/m/Y H:i ").'<br>';


    $dateDiff = date_diff(date_create("$year-12-25"), $curDate);
    print" $dateDiff->y/$dateDiff->m/$dateDiff->d   $dateDiff->h:$dateDiff->i:$dateDiff->s  negativo: $dateDiff->invert";
    echo '<br>';
    if ($dateDiff->invert !== 1){
        $year++;
        $dateDiff = date_diff(date_create("$year-12-25" ),$curDate);
        print" $dateDiff->y/$dateDiff->m/$dateDiff->d   $dateDiff->h:$dateDiff->i:$dateDiff->s  negativo: $dateDiff->invert";
    }
    $dateDiff = date_diff(date_create("$year-3-24"), $curDate);
    print" $dateDiff->y/$dateDiff->m/$dateDiff->d   $dateDiff->h:$dateDiff->i:$dateDiff->s  negativo: $dateDiff->invert";
    echo '<br>';
    if ($dateDiff->invert !== 1){
        $year++;
        $dateDiff = date_diff(date_create("$year-3-24" ),$curDate);
        print" $dateDiff->y/$dateDiff->m/$dateDiff->d   $dateDiff->h:$dateDiff->i:$dateDiff->s  negativo: $dateDiff->invert";
    }


}