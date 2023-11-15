<?php
require("consts.php");
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ejercicio 5</title>
        <link rel="stylesheet" href="../css/index5.css">
    </head>
    <body>
    <main>
        <form action="ejercicio5.php" method="post">

            <div class="textContainer">
                <label for="name">Name of the character</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="textAreaContainer">
                <label for="background">Background</label>
                <textarea name="background" id="background" cols="30" rows="10"
                          placeholder="Write the background story of your character"></textarea>
            </div>

            <?php
            foreach (RACES as $race) {
                echo '<div class="radioContainer">';
                echo '<label for="' . $race . '">' . $race . '</label>';
                echo '<input type="radio" value="' . $race . '" name="races" id="' . $race . '" required>';
                echo '</div>';
            }
            ?>

            <?php
            $cont = 0;
            foreach (CLASSES as $class) {
                echo '<div class="checkContainer">';
                echo '<label for="' . $class . '">' . $class . '</label>';
                echo '<input type="checkbox" name="classes' . $cont++ . '" value="' . $class . '" id="' . $class . '" >';
                echo '</div>';
            }
            ?>


            <?php
            foreach (CHARACTERISTICS as $characteristics) {
                echo '<div class="rangeContainer">';
                echo '<label for="' . $characteristics . '">' . $characteristics . '</label>';
                echo '<input type="range" min="0" max="20" step="1" value="0" class="rangeInput" name="' . $characteristics . '" id="' . $characteristics . '"> ';
                echo '<span id="' . $characteristics . 'Output">0    </span>';
                echo '</div>';
            }
            ?>
            <div class="selectContainer">
                <label for="alignment">Alignment</label>
                <select name="alignment" id="alignment">
                    <?php
                    $cont = 0;
                    foreach (ALIGNMENT as $alignment) {
                        echo '<option value="' . $cont . '">' . $alignment . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="numContainer">
                <label for="exp">Experience points </label>
                <input type="number" max="20" min="1" name="exp" id="exp" value="1">
            </div>
            <div class="numContainer">
                <label for="age">Insert the age of the character</label>
                <input type="number" max="400" min="1" name="age" id="age" required>
            </div>
            <div class="numContainer">
                <label for="weight">Insert the weight of the character</label>
                <input type="number" max="250" min="1" name="weight" id="weight" required>
            </div>
            <div class="numContainer">
                <label for="height">Insert the weight of the character</label>
                <input type="number" max="300" min="1" name="height" id="height" required>
            </div>
            <div class="colorContainer">
                <label for="hairColor">Select the hair color</label>
                <input type="color" name="hairColor" id="hairColor" required>
            </div>
            <div>
                <label for="skinColor">Skin color</label>
                <input type="color" name="skinColor" id="skinColor" required>
            </div>
            <div>
                <label for="eyesColor">eye color</label>
                <input type="color" name="eyesColor" id="eyesColor" required>
            </div>
            <button type="submit">Submit</button>
        </form>

    </main>
    <script src="../js/rangeInput2.js">
    </script>
    </body>
    </html>
<?php
