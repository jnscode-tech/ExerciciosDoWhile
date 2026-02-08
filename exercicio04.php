<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Fatorial</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container-geral">

<div class="container-exercicios">
<form method="post">

    <label>Digite um valor para saber o fatorial: </label><br><br>
    <input type="number" name="valor" required><br><br>
    
    
    <div class="botoes">
    <button type="submit"><strong> N! </strong></button>

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
    $valorDigitado =$n;
    $fatorial =1;

    if ($n < 0) {
        echo "Não existe fatorial de número negativo.";
    } elseif ($n == 0) {
        echo "0! = 1";
    } else {
    
do {

   $fatorial = $fatorial * $n; // $fatorial *= $n; 
    $n--;
    
} while ($n > 1);

echo "O fatorial do ".$valorDigitado ." é: ".$fatorial;

    }
}
?>

</div>
</div>

</body>
</html>

