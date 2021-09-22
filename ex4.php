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
    <h1>Exercício 4</h1>
    <h2>Calcular o preço de um produto</h2>
    <div>
    <form action="ex4.php" method="post">
        <label for="preco">Informe o preço do produto</label><br>
        <input type="number" name="preco" step="0.01" id=""><br>

        <label for="metodo_pagamento">Escolha o método de pagamento</label><br>
        <select name="metodo_pagamento" id="">
            <option value="1">À vista, no dinheiro ou cheque</option>
            <option value="2">Á vista no cartão de crédito</option>
            <option value="3">Parcelado em 2 vezes</option>
            <option value="4">Parcelado em 3 vezes</option>
        </select><br><br>
        
        <button type="submit" name="calcular" class="submit">Calcular</button>
        <button type="reset">Cancelar</button>
    </form>
    </div>
    

    <?php
        if(isset($_POST['calcular'])){
           $preco_inicial = $_POST['preco'];
           $metodo_pagamento = $_POST['metodo_pagamento'];

           if($metodo_pagamento == 1){
                $preco_final = $preco_inicial - ($preco_inicial * 0.10);
                echo "<p>O preço final é $preco_final reais</p>";
           }
           elseif($metodo_pagamento == 2){
               $preco_final = $preco_inicial - ($preco_inicial * 0.05);
               echo "<p>O preço final é $preco_final reais</p>";

           }
           elseif($metodo_pagamento == 3){
               $preco_final = $preco_inicial;
               $valor_parcela = $preco_final / 2;
               echo "<p>O preço final é $preco_final, divido em duas parcelas de $valor_parcela reais</p>";
           }
           else{
            $preco_final = $preco_inicial + ($preco_inicial * 0.10);
            $valor_parcela = $preco_final / 3;
            echo "<p>O preço final é $preco_final, divido em três parcelas de $valor_parcela reais</p>";
           }
        }
    ?>
</body>
</html>