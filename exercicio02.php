<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Número</title>
</head>
<body>

<form method="post">
    <label>Digite um valor:</label>
    <input type="number" name="valor" required>
    <button type="submit">EXIBIR</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $n = ($_POST["valor"]);
    $i = 1;

    echo "<h3>Número do 1 a $n</h3>";

    do {
        echo "$i" ."<br>";
        $i++;
    } while ($i <= $n);
}
?>
<br>
<a href="index.php">
        <button class="voltar"><strong>VOLTAR</strong></button>
</a>

</body>
</html>

