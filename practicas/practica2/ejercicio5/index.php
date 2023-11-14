<?php
const CLASSES = ["Barbarian", "Bard", "Cleric", "Druid", "Fighter", "Monk", "Paladin", "Ranger", "Rogue", "Sorcerer", "Warlock", "Wizard", "Artificer"];
const RACES = ["Dragon-born", "Dwarf", "Elf", "Gnome", "Half-elf", "Half-ling", "Half-Orc", "Human", "Tie-fling"];
const CHARACTERISTICS =["Strength","Skill", "Physique", "Intelligence", "Wisdom", "Charisma"];
const ALIGNMENT = ["Lawful-good","Neutral-good","Chaotic-good","Lawful-neutral", "Neutral", "Chaotic-neutral","Lawful-evil","Neutral-evil","Chaotic-evil"];
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ejercicio 5</title>
        <link rel="stylesheet" href="../css/ejercicio5.css">
    </head>
    <body>
    <main>
        <form action="ejercicio5.php" method="post">
            <?php
            foreach (RACES as $race) {
                echo '<div class="radioContainer">';
                echo '<label for="' . $race . '">' . $race . '</label>';
                echo '<input type="radio" value="' . $race . '" name="races" id="' . $race . '">';
                echo '</div>';
            }
            ?>

            <?php
            foreach (CLASSES as $class) {
                echo '<div class="checkContainer">';
                echo '<label for="' . $class . '">' . $class . '</label>';
                echo '<input type="checkbox" name="classes" value="' . $class . '" id="' . $class . '">';
                echo '</div>';
            }
            ?>

            <?php
            foreach (CHARACTERISTICS as $characteristics){
                echo '<div class="rangeContainer">';
                echo '<label for="'.$characteristics.'">'. $characteristics .'</label>';
                echo '<input type="range" min="0" max="20" step="1" value="0" class="rangeInput" name="'.$characteristics.'" id="'.$characteristics.'"> ';
                echo '<span id="'.$characteristics.'Output">0    </span>';
                echo '</div>';
            }
            ?>
            <label for="alignment">Alignment</label>
            <select name="alignment" id="alignment">
                <?php
                $cont = 0;
                foreach (ALIGNMENT as $alignment){
                    echo '<option value="'.$cont.'">'.$alignment.'</option>';
                }
                ?>
            </select>

            <button type="submit">Submit</button>
        </form>

    </main>
    <script src="../js/rangeInput2.js">
    </script>
    </body>
    </html>
<?php
