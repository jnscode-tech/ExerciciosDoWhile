<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada usando Do While</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container-geral">  

<div class="container-exercicios"> 

<form method="post">
    <label>Digite um número:</label><br><br>
    <input type="number" name="numero" required><br><br>

<div class="botoes">
  <button type="submit"><strong>TABUADA</strong></button>

<button type="button" onclick="window.location.href='index.php'"><strong>
        VOLTAR</strong></button>
</div>
</form>

</div>



<div class="container-resultado">

<?php
if (isset($_POST["numero"])) {
    $numero = $_POST["numero"];
    $i = 0;

    echo "<h3>Tabuada do $numero</h3>";
    

    do {
         echo "$numero x $i = " . ($numero * $i) ."<br>" ;
        $i++;
    } while ($i <= 10);
    
}
?>
</div>

</div> <!-- FIM DIV 1 -->
</body>
</html>
