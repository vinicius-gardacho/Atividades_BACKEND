<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>
    <h3>Calculadora Simples</h3>
    
    <form method="POST">
        <label>Número 1:</label>
        <input type="number" step="any" name="num1" required><br><br>
        
        <label>Número 2:</label>
        <input type="number" step="any" name="num2" required><br><br>
        
        <button type="submit" name="operacao" value="somar">Somar</button>
        <button type="submit" name="operacao" value="subtrair">Subtrair</button>
        <button type="submit" name="operacao" value="multiplicar">Multiplicar</button>
        <button type="submit" name="operacao" value="dividir">Dividir</button>
    </form>

    <?php
    if (isset($_POST['operacao'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacao = $_POST['operacao'];
        $resultado = 0;

        switch ($operacao) {
            case 'somar':
                $resultado = $num1 + $num2;
                break;
            case 'subtrair':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicar':
                $resultado = $num1 * $num2;
                break;
            case 'dividir':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    $resultado = "Erro (Divisão por zero)";
                }
                break;
        }

        echo "<h4>Resultado: $resultado</h4>";
    }
    ?>
</body>
</html>