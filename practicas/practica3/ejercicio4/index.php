<?php
const VOWELS = ['a', 'e', 'i', 'o', 'u'];
?>
    <!Doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ejercicio4</title>
    </head>
    <body>
    <form action="#" method="post">
        <label for="name">
            Nombre
            <input type="text" id="name" name="name" required>
        </label>
        <label for="useFunc">
            Usar Funciones
            <input type="radio" name="useFunc" value="1" id="useFunc" checked required>
        </label>
        <label for="dontUseFunc">
            No usar funciones
            <input type="radio" name="useFunc" value="0" id="dontUseFunc">
        </label>
        <button type="submit">Enviar</button>
    </form>

    </body>
    </html>
<?php

if (!empty($_POST["name"])) {
    $name = $_POST["name"];
    if ($_POST["useFunc"] === "1"){
        $words = preg_split('/\s+/', $name) ;

        $cont = 0;
        foreach ($words as $word){
            $constNum = 0;
            for ($i = 0; $i < strlen($word); $i++) {
                if (in_array($word[$i],VOWELS)){
                    continue;
                }
                $constNum++;
            }
            echo '<h1> Palabra ' . $cont++ . ': Numero de consonantes --> '. $constNum. ' || Numero de letras --> '. strlen($word . '</h1>');
        }
        echo '<h2>Esto ha sido con funiones</h2>';
        exit();
    }


    $chars = [];
    $words = [];

    for ($i = 0; $i < strlen($name); $i++) {
        $chars[] = $name[$i];

    }
    $chars[] = " ";

    $wordCont = 0;
    $words[] = "";
    $prevPos = "";
    $word = "";

    foreach ($chars as $char) {
        if ($char === " ") {
            if ($prevPos === " ") continue;
            if ($word === "") continue;

            $words[$wordCont] = strtolower($word);
            $word = "";
            $prevPos = $char;
            $wordCont++;
            continue;
        }
        $prevPos = $char;
        $word .= $char;
    }

    $cont = 1;
    foreach ($words as $word) {

        $constNum = 0;
        for ($j = 0; $j < strlen($word); $j++) {
            $isVowel = false;
            foreach (VOWELS as $vowel) {
                if ($vowel === $word[$j]) {
                    $isVowel = true;
                    break;
                }
            }
            if ($isVowel) continue;

            $constNum++;
        }
        echo '<h1> Palabra ' . $cont++ . ': Numero de consonantes --> '.$constNum.' || Numero de Letras ' . strlen($word);
    }

    echo "<h2>Esto ha sido sin funciones</h2>";
}
?>