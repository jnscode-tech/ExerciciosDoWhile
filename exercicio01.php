<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada usando Do While</title>
</head>
<body>

<form method="post">
    <label>Digite um número:</label>
    <input type="number" name="numero" required>
    <button type="submit">Mostrar Tabuada</button>
</form>

<?php
if (isset($_POST["numero"])) {
    $numero = $_POST["numero"];
    $i = 1;

    echo "<h3>Tabuada do $numero</h3>";

    do {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
        $i++;
    } while ($i <= 10);
}
?>
<br>
<a href="index.php">
        <button class="voltar"><strong>VOLTAR</strong></button>
</a>

</body>
</html>
