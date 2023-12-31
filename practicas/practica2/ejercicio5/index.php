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
        <link rel="icon" href="../imgs/icon/dndIcon.png">
    </head>
    <body>
    <main>
        <?php
        //Comprobacion de si se ha introducido mal los datos
        if (!empty($_GET["message"])) {
            echo '<h1>' . $_GET["message"] . '</h1>';
        }
        ?>
        <h1>D&D</h1>
        <form action="ejercicio5.php" method="post">
            <h1>Create your character</h1>
            <!--Nombre-->
            <div class="textContainer">
                <label for="name">Name of the character</label>
                <input type="text" name="name" id="name" placeholder="Write the name of the character" required>
            </div>

            <!--Transfondo-->
            <div class="textContainer">
                <label for="background" id="background">Background</label>
                <textarea name="background" id="background" cols="30" rows="10"
                          placeholder="Write the background story of your character"></textarea>
            </div>

            <!--Raza-->
            <?php
            echo '<div class="radioContainer">';
            echo '<h2>Race of the character</h2>';
            foreach (RACES as $race) {
                echo '<label for="' . $race . '">' . $race;
                echo '<input type="radio" value="' . $race . '" name="races" id="' . $race . '" required>';
                echo '</label>';
            }
            echo '</div>';
            ?>


            <!--Clases-->
            <?php
            $cont = 0;
            echo '<div class="radioContainer checkContainer">';
            echo '<h2>Class of the character </h2>';
            foreach (CLASSES as $class) {
                 echo '<label for="' . $class . '">' . $class;
                if ($class === "Bard")
                    echo '<input type="checkbox" name="classes[]" checked value="' . $class . '" id="' . $class . '" >';
                else
                    echo '<input type="checkbox" name="classes[]" value="' . $class . '" id="' . $class . '" >';
                echo '</label>';
            }
            echo '</div>';
            ?>

            <!--Caracteristicas (fuerza destreza ...)-->
            <div class="layoutRange">
                <?php
                echo '<h2>Choose the characteristics</h2>';
                echo '<div class="rangeContainer">';
                foreach (CHARACTERISTICS as $characteristics) {
                    echo '<label for="' . $characteristics . '">' . $characteristics;
                    echo '<input type="range" min="0" max="20" step="1" value="0" class="rangeInput" name="' . $characteristics . '" id="' . $characteristics . '"> ';
                    echo '<span id="' . $characteristics . 'Output"> 0</span>';
                    echo '</label>';
                }
                echo '</div>';
                ?>
            </div>
            <!--Alienamiento-->
            <div class="selectContainer">
                <label for="alignment">Alignment</label>
                <select name="alignment" id="alignment">
                    <?php
                    foreach (ALIGNMENT as $alignment) {
                        echo '<option value="' . $alignment . '">' . $alignment . '</option>';
                    }
                    ?>
                </select>
            </div>

            <!--Puntos de experiencia-->
            <div class="numContainer">
                <label for="exp">Experience points </label>
                <input type="number" max="20" min="1" name="exp" id="exp" value="1">
            </div>

            <!--Edad-->
            <div class="numContainer">
                <label for="age">Insert the age of the character</label>
                <input type="number" max="400" min="1" name="age" id="age" placeholder="Years" required>
            </div>

            <!--Peso-->
            <div class="numContainer">
                <label for="weight">Insert the weight of the character</label>
                <input type="number" max="250" min="1" name="weight" id="weight" placeholder="Kg" required>
            </div>

            <!--Altura-->
            <div class="numContainer">
                <label for="height">Insert the height of the character</label>
                <input type="number" max="300" min="1" name="height" id="height" placeholder="Cm" required>
            </div>
            <!--Colores-->
            <div class="colorWrapper">
                <h2>Choose the colors</h2>

                <!--Color de pelo-->
                <div class="colorContainer">
                    <label for="hairColor" id="hairColor">Select the hair color</label>
                    <input type="color" name="hairColor" id="hairColor" required>
                </div>

                <!--Color de piel-->
                <div class="colorContainer">
                    <label for="skinColor" class="colorLabel">Select the skin color</label>
                    <input type="color" name="skinColor" id="skinColor" required>
                </div>

                <!--Color de hojos-->
                <div class="colorContainer">
                    <label for="eyesColor" class="colorLabel">Select the eye color</label>
                    <input type="color" name="eyesColor" id="eyesColor" required>
                </div>
            </div>
            <button type="submit">Submit</button>
        </form>

    </main>
    <script src="../js/d&dVisualFeatures.js">
    </script>
    </body>
    </html>
<?php
