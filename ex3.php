<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho 2</title>
</head>
<body>
    <?php include_once "menu.php"?>
    <h1>Exercício 3</h1>
    <h2>Categoria de Natação</h2>
    <p>Informe a idade do nadador</p>
    <form action="ex3.php" method="post">
        <label for="idade">Idade do nadador</label>
        <input type="number" name="idade" id="">
        
        <button type="submit" name="enviar">Calcular</button>
        <button type="reset">Cancelar</button>
    </form>

    <?php
        if(isset($_POST['enviar'])){
            $idade = $_POST['idade'];

            if($idade < 4){
                echo "<p>O nada <b>não<b> possui categoria.";
            }
            elseif($idade < 7){
                echo "<p>O nadador é da categoria <b>Infantil A<b><p>";
            }
            elseif($idade < 10){
                echo "<p>O nadador é da categoria <b>Infantil B<b><p>";
            }
            elseif($idade < 13){
                echo "<p>O nadador é da categoria <b>Juvenil A<b><p>";
            }
            elseif($idade < 17){
                echo "<p>O nadador é da categoria <b>Juvenil B<b><p>";
            }
            else{
                echo "<p>O nadador é da categoria <b>Adulto<b><p>";
            }
        }
    ?>
</body>
</html>