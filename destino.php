<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //legenda e cor
        $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
        $url = filter_input(INPUT_POST, "url", FILTER_SANITZE_SPECIAL_CHARS);
        $legenda = filter_input(INPU_POST, "legenda", FILTER_SANITIZE_SPECIAL_CHARS);
        $cor =  filter_input(INPUT_POST,"cor", FILTER_SANITIZE_SPECIAL_CHARS);
        $ali = filter_input(INPUT_POST, "ali", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>
    <style>
        body{

            display: flex;
            align-items: center;
            justify-content: <?php echo $ali?>;

            background-color: #3b3b3b;

            color: #38caef;

            font-family: sans-serif;

        }

        .container {
            border: 2vw solid <?php echo $cor; ?>;

            border-radius: 2vw;

            padding: 5vw;

            background-color: #292929;

            text-align: center;

            display: flex;

            align-items: center;
            justify-content: center;

            flex-direction: column;

            transition: 1s;
        }
    </style>

    <div class="container">
        <h1>
            <?php echo $titulo; ?>
        </h1>
        <hr>
        <img src="<?php echo $url; ?>" alt="imagem">
        <hr>
        <h3>
            <?php echo $legenda; ?>
        </h3>

    </div>

    <?php
        header()
    ?>
</body>
</html>