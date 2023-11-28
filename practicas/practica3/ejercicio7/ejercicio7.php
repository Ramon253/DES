<?php
date_default_timezone_set("Europe/Madrid");
/*$christmas = date_format(date_create("23-12-23"),"d/m/Y");
print $christmas.'<br>';*/
getDates($_POST["date"], $_POST["time"]);
function getDates($date, $time)
{
    $userDateTime = date_create($date . $time);
    //$time = date_create($time);
    $year = intval(date_format($userDateTime,"Y"));
    //$time = date_format($time, "H:i");
    print date("d/m/Y H:i <br>")."<br>";
    print date_format($userDateTime ,"d/m/Y H:i ").'<br>';
    $dateDiff = date_diff(date_create("$year-12-25"), $userDateTime);
    /*if ($dateDiff->invert === 1)
        $dateDiff = $dateDiff(date_create(date('Y',$userDateTime)));*/
    print" $dateDiff->y / $dateDiff->m / $dateDiff->d  $dateDiff->h:$dateDiff->i:$dateDiff->s  negativo: $dateDiff->invert";
}