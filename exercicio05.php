<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Fibonacci</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container-geral">

<div class="container-exercicios">
<form method="post">

    <label>Digite um valor para saber a sequência Fibonacci: </label><br><br>
    <input type="number" name="valor" required><br><br>
    
    
    <div class="botoes">
    <button type="submit"><strong> Fibonacci </strong></button>

     <button type="button" onclick="window.location.href='index.php'"><strong>
        VOLTAR</strong>
     </button>
    </div>
</form>

</div>

<div class="container-resultado">

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["valor"];
    $valorDigitado = $n;
        $primeiro = 0;
        $segundo = 1;
        $i=1;


    if($n<=0){
        echo "Digite positivo";
        } else{
        echo "<h3>Sequência de Fibonacci com $n termos é: </h3>";

        do{
         echo $primeiro ."<br>";

         $proximo=$primeiro+ $segundo;
         $primeiro = $segundo;
         $segundo = $proximo;
         $i++;
        

        }while($i<=$n);

    }

}
?>

</div>
</div>

</body>
</html>

