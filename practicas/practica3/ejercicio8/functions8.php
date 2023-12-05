<?php
function getCommands($commands): array
{
    $order = ["menuPos", "name", "fontColor", "url"];
    $menus = [];
    //Separo el texto en lineas y luego en cada parte del comando
    foreach (explode("\n", $commands) as $command) {
        $commandParts = explode("-", $command);
        $menu = [];
        for ($i = 0; $i < count($commandParts); $i++) {
            $menu[$order[$i]] = $commandParts[$i];
        }
        $menus[] = $menu;
    }

    return $menus;
}

function getTable($gridArr): array
{
    $positions = [];
    $width = 0;
    $height = 0;
    foreach ($gridArr as $gridInput) {
        $xPos = intval($gridInput[1]);
        $yPos = intval($gridInput[0]);
        $positions[$yPos][] = $xPos;
        $width = ($xPos > $width) ? $xPos : $width;
        $height = ($yPos > $height) ? $yPos : $height;
    }
    $positions["width"] = $width;
    $positions["height"] = $height;
    return $positions;
}

function printTable($positions)
{
    print '<table>';
    //Obtengo el alto y ancho del array
    for ($i = 0; $i <= $positions["height"]; $i++) {
        print '<tr>';
        for ($j = 0; $j <= $positions["width"]; $j++) {
            print '<td';
            print (array_key_exists($i,$positions) && in_array($j, $positions[$i])) ? ' class="selected" >' : '>';
            print "Celda $i : $j";
            print '</td>';
        }
        print '</tr>';
    }
    print '</table>';
}
function createMenu($name, $color, $link){
    print "<div class='menu' style='color: $color'>";
    print "<h1>$name</h1>";
    print "<a href='$link' target='_blank'>Ver mas</a>";
    print "</div>";
}