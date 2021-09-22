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
    <h1>Exercício 5</h1>
    <div>
        <form action="ex5.php" method="post">
            <label for="operador">Digite o operador</label><br>
            <input type="number" name="operador" id=""><br>

            <label for="raio">Digite o raio da circunferência</label><br>
            <input type="number" name="raio" id=""><br>
            
            <button type="submit" name="calcular" class="submit">Calcular</button>
            <button type="reset">Cancelar</button>
        </form>
    </div>
    

    <?php
        if(isset($_POST['calcular'])){
           $operador = $_POST['operador'];
           $raio = $_POST['raio'];
           $pi = 3.14;

           if($operador != 1 && $operador != 2){
               echo "<p><b>ERRO!</b> O operador digitado não existe.</p>";
           }
           else{
               if($operador == 1){
                    $area = $pi * $raio * $raio;
                    echo "<p>A área da circunferência é $area cm²</p>";
               }
               else{
                    $perimetro = 2 * $pi * $raio;
                    echo "<p>O perímetro da circunferência é $perimetro cm</p>";
               }
           }
        }
    ?>
</body>
</html>