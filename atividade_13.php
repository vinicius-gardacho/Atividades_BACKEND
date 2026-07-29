<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Ficha de Cadastro</title>
    <style>
        .cartao {
            border: 2px solid #333;
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            background-color: #f9f9f9;
            margin-top: 20px;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>

    <?php
    
    if (isset($_POST['cadastrar'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $nascimento = $_POST['nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $sexo = $_POST['sexo'];
        $curso = $_POST['curso'];
        $observacoes = $_POST['observacoes'];

        echo "<div class='cartao'>";
        echo "<h3>Cartão de Cadastro</h3>";
        echo "<strong>Nome:</strong> $nome <br>";
        echo "<strong>Email:</strong> $email <br>";
        echo "<strong>Telefone:</strong> $telefone <br>";
        echo "<strong>Data de Nascimento:</strong> $nascimento <br>";
        echo "<strong>Localidade:</strong> $cidade - $estado <br>";
        echo "<strong>Sexo:</strong> $sexo <br>";
        echo "<strong>Curso:</strong> $curso <br>";
        echo "<strong>Observações:</strong> " . nl2br($observacoes) . "<br>";
        echo "<br><a href=''>Fazer novo cadastro</a>";
        echo "</div>";

    } else {
    ?>
        <h3>Formulário de Inscrição</h3>
        <form method="POST">
            <label>Nome:</label><br>
            <input type="text" name="nome" required><br><br>

            <label>Email:</label><br>
            <input type="email" name="email" required><br><br>

            <label>Telefone:</label><br>
            <input type="tel" name="telefone" required><br><br>

            <label>Data de nascimento:</label><br>
            <input type="date" name="nascimento" required><br><br>

            <label>Cidade:</label><br>
            <input type="text" name="cidade" required><br><br>

            <label>Estado:</label><br>
            <select name="estado" required>
                <option value="PR">Paraná</option>
                <option value="SP">São Paulo</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="SC">Santa Catarina</option>
            </select><br><br>

            <label>Sexo:</label><br>
            <input type="radio" name="sexo" value="Masculino" required> Masculino
            <input type="radio" name="sexo" value="Feminino" required> Feminino
            <input type="radio" name="sexo" value="Outro" required> Outro<br><br>

            <label>Curso:</label><br>
            <input type="text" name="curso" required><br><br>

            <label>Observações:</label><br>
            <textarea name="observacoes" rows="4" cols="30"></textarea><br><br>

            <button type="submit" name="cadastrar">Enviar Cadastro</button>
        </form>
    <?php
    } // Fim do if/else
    ?>

</body>
</html>