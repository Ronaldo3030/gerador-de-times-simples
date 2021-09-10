<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerador de times</title>
</head>
<body>
    <div class="main center-column">
        <h1 class="titulo">Gerador de Times</h1>
        <div class="container-info">
            <div class="input-quantidade ">
                <form action="nome_time.php" method="post">
                    <div class="infos center-column">
                        <label for="Informe">Informe a quantidade de players:</label>
                        <input class="input" type="number" name="quant-times" placeholder="Quantidade de players">
                        <input class="btn" type="submit" value="Enviar">
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>