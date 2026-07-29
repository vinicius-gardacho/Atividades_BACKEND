<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h3>Descubra seu IMC</h3>
    
    <form method="POST">
        <label>Peso (kg):</label><br>
        <input type="number" step="0.01" name="peso" required><br><br>
        
        <label>Altura (ex: 1.75):</label><br>
        <input type="number" step="0.01" name="altura" required><br><br>
        
        <button type="submit" name="calcular_imc">Calcular IMC</button>
    </form>

    <?php
    if (isset($_POST['calcular_imc'])) {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        
        if ($altura > 0) {
            $imc = $peso / ($altura * $altura);
            $imcFormatado = number_format($imc, 2, ',', '.');
            
            echo "Seu IMC é: $imcFormatado";
        } else {
            echo "Por favor, insira uma altura válida.";
        }
    }
    ?>
</body>
</html>