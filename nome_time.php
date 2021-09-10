<?php session_start();

    $quantTimes = $_POST['quant-times'];
    $_SESSION['quant-times'] = $quantTimes;
    if($quantTimes <= 0){
        header('Location:index.php');
    }

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
            <form action="sorteio.php" method="post">
                
            <?php
                for($i = 0; $i < $quantTimes; $i++){
                    // CRIAR A DIV ONDE SERA INFORMADO O NOME DOS TIMES
                    $cont = $i + 1;
                    echo "<div class='input-nomes'>
                            <label for='Informe'>Informe o $cont nome:</label>
                            <input type='text' name='nome$cont' placeholder='Digite o nome'>
                            </div>";
                        }
                        ?>
                <input type='submit' value='Enviar'>
            </form>
        </div>
    </div>
</body>
</html>