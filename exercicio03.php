<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Números - Regressão</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container-geral">

<div class="container-exercicios">
<form method="post">

    <label>Digite um valor:</label><br><br>
    <input type="number" name="valor" required><br><br>
    
    
    <div class="botoes">
    <button type="submit"><strong> EXIBIR </strong></button>

     <button type="button" onclick="window.location.href='index.php'"><strong>
        VOLTAR</strong>
     </button>
    </div>
</form>

</div>

<div class="container-resultado">

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $n = ($_POST["valor"]);

    echo "<h3>Número de $n a 0 </h3>";

    do {
        echo "$n" ."<br>";
        
        $n--;
    } while ($n>=0);
}
?>

</div>
</div>

</body>
</html>

