<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Carros</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.container {
    width: 80%;
    margin: 50px auto;
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1, h2 {
    color: #333;
    text-align: center;
}

form {
    margin-top: 20px;
    max-width: 500px; /* Define a largura máxima do formulário */
    margin: 0 auto; /* Centraliza o formulário na horizontal */
}

.lista {
    margin-top: 20px;
    max-width: 500px; /* Define a largura máxima do formulário */
    margin: 0 auto; /* Centraliza o formulário na horizontal */
}

label {
    display: block;
    margin-bottom: 5px;
    color: #666;
}

input[type="text"],
input[type="number"],
button {
    width: 100%;
    padding: 12px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
}

button {
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}

ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

ul li {
    background-color: #f9f9f9;
    padding: 15px;
    margin-bottom: 10px;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.color-box {
    display: inline-block;
    width: 20px;
    height: 20px;
    margin-right: 10px;
    border: 1px solid #ccc; /* Adicione uma borda para separar as cores */
}
    </style>
</head>
<body>
    <?php
    // Inclua o arquivo do controlador
    include_once 'C:\xampp\htdocs\revisao\src\app\Controller\CarrosController.php';

    // Crie uma instância do controlador
    $carroController = new CarroController();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifique se o formulário foi enviado para adicionar um novo carro
        if (isset($_POST['addCarro'])) {
            $novaCarro = array(
                'modelo' => $_POST['modelo'],
                'cor' => $_POST['cor'],
                'ano_fabricacao' => $_POST['ano_fabricacao'],
                'potencia_motor' => $_POST['potencia_motor'],
                'peso' => $_POST['peso']
            );
            $carroController->adicionarCarro($novaCarro);
            echo '<p>Novo carro adicionado com sucesso!</p>';
        }

        // Verifique se o formulário foi enviado para atualizar um carro existente
        if (isset($_POST['updateCarro'])) {
            $carroId = $_POST['carro_id'];
            $dadosAtualizados = array(
                'modelo' => $_POST['modelo'],
                'cor' => $_POST['cor'],
                'ano_fabricacao' => $_POST['ano_fabricacao'],
                'potencia_motor' => $_POST['potencia_motor'],
                'peso' => $_POST['peso']
            );
            $carroController->atualizarCarro($carroId, $dadosAtualizados);
            echo '<p>Carro atualizado com sucesso!</p>';
        }

        // Verifique se o formulário foi enviado para excluir um carro
        if (isset($_POST['deleteCarro'])) {
            $carroId = $_POST['carro_id'];
            $carroController->deletarCarro($carroId);
            echo '<p>Carro excluído com sucesso!</p>';
        }
    }
    ?>
    <div class="lista">
        <?php
    $carros = $carroController->listarCarros();
    if (!empty($carros)) {
        echo '<h2>Lista de Carros</h2>';
        echo '<ul>';
        foreach ($carros as $carro) {
            echo '<li>' . 
                    '<div class="color-box" style="background-color: ' . $carro['cor'] . '"></div>' . 
                    '<span>' . $carro['modelo'] . ' - Ano: ' . $carro['ano_fabricacao'] . '</span>' . 
                 '</li>';
        }
    } else {
        echo '<p>Nenhum carro encontrado.</p>';
    }
    ?>
</div>
    <h2>Adicionar Carro</h2>
    <form method="post">
        <label for="modelo">Modelo:</label><br>
        <input type="text" id="modelo" name="modelo" required><br>
        <label for="cor">Cor:</label><br>
        <input type="text" id="cor" name="cor" placeholder="Escreva em Inglês" required><br>
        <label for="ano_fabricacao">Ano de Fabricação:</label><br>
        <input type="number" id="ano_fabricacao" name="ano_fabricacao" required><br>
        <label for="potencia_motor">Potência do Motor:</label><br>
        <input type="text" id="potencia_motor" name="potencia_motor" required><br>
        <label for="peso">Peso:</label><br>
        <input type="text" id="peso" name="peso" required><br><br>
        <button type="submit" name="addCarro">Adicionar Carro</button>
    </form>

    <h2>Atualizar Carro</h2>
    <form method="post">
        <label for="carro_id">ID do Carro:</label><br>
        <input type="number" id="carro_id" name="carro_id" required><br>
        <label for="modelo">Novo Modelo:</label><br>
        <input type="text" id="modelo" name="modelo" required><br>
        <label for="cor">Nova Cor:</label><br>
        <input type="text" id="cor" name="cor" placeholder="Escreva em Inglês" required><br>
        <label for="ano_fabricacao">Ano de Fabricação:</label><br>
        <input type="number" id="ano_fabricacao" name="ano_fabricacao" required><br>
        <label for="potencia_motor">Potência do Motor:</label><br>
        <input type="text" id="potencia_motor" name="potencia_motor" required><br>
        <label for="peso">Novo Peso:</label><br>
        <input type="text" id="peso" name="peso" required><br><br>
        <button type="submit" name="updateCarro">Atualizar Carro</button>
    </form>

    <h2>Excluir Carro</h2>
    <form method="post">
        <label for="carro_id">ID do Carro:</label><br>
        <input type="number" id="carro_id" name="carro_id" required><br><br>
        <button type="submit" name="deleteCarro">Excluir Carro</button>
    </form>
</body>
</html>
