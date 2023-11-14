<?php
$player = ["Name" => '', "race" => $_POST["races"], "class" => $_POST["classes"]];

if ($player["race"] === "Human" || $player["race"] === "Dwarf"){
    echo '<img src="../imgs/d&d/'.$player["race"].'/'.$player["race"].$player["class"].'.png" alt="'.$player["race"].$player["class"].'">';
}else {
    echo '<img src="../imgs/d&d/'.$player["race"].'.webp" alt="ns">';
}