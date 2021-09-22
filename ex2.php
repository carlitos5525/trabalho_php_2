<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho 2</title>
    <link rel="stylesheet" href="estilo.css" type="text/css">

</head>
<body>
    <?php include_once "menu.php"?>
    <h1>Exercício 2</h1>
    <h2>Calculadora de equação do segundo grau</h2>
    <p>A equação do segundo grau é (ax² + bx + c)</p>
    <div>
        <form action="ex2.php" method="post">
            <label for="primeiro_termo">Primeiro termo da equação (a)</label><br>
            <input type="number" name="primeiro_termo" id=""><br>

            <label for="segundo_termo">Segundo termo da equação (b)</label><br>
            <input type="number" name="segundo_termo" id=""><br>

            <label for="terceiro_termo">Terceiro termo da equação (c)</label><br>
            <input type="number" name="terceiro_termo" id=""><br>

            <button type="submit" name="calcular" class="submit">Calcular</button>
            <button type="reset">Cancelar</button>
        </form>
    </div>
    

    <?php
        if(isset($_POST['calcular'])){
            $primeiro_termo = $_POST['primeiro_termo'];
            $segundo_termo = $_POST['segundo_termo'];
            $terceiro_termo = $_POST['terceiro_termo'];
            $delta = ($segundo_termo * $segundo_termo) - (4 * $primeiro_termo * $segundo_termo);

            if($delta < 0){
                echo "<p>Não há raízes reais para essa equação</p>";
            }
            else{
                $raiz_1 = ((-1 * $segundo_termo) + $delta) / (2 * $primeiro_termo);
                $raiz_2 = ((-1 * $segundo_termo) - $delta) / (2 * $primeiro_termo);
                echo "<p>As raízes da equação são $raiz_1 e $raiz_2</p>";
            }
        }
    ?>
</body>
</html>