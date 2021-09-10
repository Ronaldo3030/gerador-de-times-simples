<?php session_start();

    $quantTimes = $_SESSION['quant-times'];
    $times = [];
    for($i = 1; $i < ($quantTimes + 1); $i++){
        $var = $_POST["nome$i"];
        array_push($times, $var);
    }

    shuffle($times);

    $azarado;
    if ($quantTimes % 2 !== 0){
        echo "Como o numero de players é impar, 1 sera removido para não haver desbalanceamento!<br>";
        $azarado = array_pop($times);
        echo "O azarado da vez é: $azarado";
    }

    // DIVIDINDO O ARRAY EMBARALHADO EM 2
    list ($time1, $time2) = array_chunk($times, ceil(count($times) / 2));

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sorteio para times</title>
</head>
<body>
    <div class="main">
        <div class="container-info">
            <div class="time1">
                <h1>Time 1</h1>
                <?php
                    foreach($time1 as $value){
                        echo "$value <br>";
                    }
                ?>
            </div>
            <div class="time2">
                <h1>Time 2</h1>
                <?php
                    foreach($time2 as $value){
                        echo "$value <br>";
                    }
                ?>
            </div>
            <div class="fora">
                <h2>Ficou de fora</h2>
                <?php
                    echo $azarado;
                ?>
            </div>
        </div>
    </div>
</body>
</html>