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
    <h1>Exercício 1</h1>
    <h2>Calculadora de peso ideal</h2>
    <div>
        <form action="ex1.php" method="post">
            <label for="sexo">Selecione o sexo</label><br>
            <select name="sexo" id="sexo">
                <option value="homem">Homem</option>
                <option value="mulher">Mulher</option>
            </select><br>

            <label for="altura">Informe a altura em metros</label><br>
            <input type="number" name="altura" step="0.01" placeholder="Exemplo: 1.70"><br>
            
            <button type="submit" name="calcular" class="submit">Calcular</button>
            <button type="reset">Cancelar</button>
        </form>
    </div>

    <?php
        if(isset($_POST['calcular'])){
            $sexo = $_POST['sexo'];
            $altura = $_POST['altura'];
            $peso_ideal = 0;

            if($sexo == 'mulher'){
                $peso_ideal = (62.1 * $altura) - 44.7;
            }
            elseif($sexo == 'homem'){
                $peso_ideal = (72.7 * $altura) - 58;
            }

            echo "<p>O peso ideal é <b>$peso_ideal</b> kg.</p>";
        }
    ?>
</body>
</html>