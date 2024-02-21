<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Carros</title>
    <link rel="stylesheet" href="public/css/registros.css">
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
                    '<span> Id: ' . $carro['id'] . ' - ' . $carro['modelo'] . ' - Ano: ' . $carro['ano_fabricacao'] . '</span>' . 
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
        <a href="page.php">Voltar</a>
    </form>
</body>
</html>
