<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Pistas</title>
    <link rel="stylesheet" href="public/css/registros.css">
</head>
<body>
    <?php
    // Inclua o arquivo do controlador
    include_once 'C:\xampp\htdocs\revisao\src\app\Controller\PistasController.php';

    // Crie uma instância do controlador
    $pistaController = new PistaController();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifique se o formulário foi enviado para adicionar um novo pista
        if (isset($_POST['addPista'])) {
            $novaPista = array(
        'cidade' => $_POST['cidade'],
        'distancia' => $_POST['distancia'],
        'país' => $_POST['pais'],
        'clima' => $_POST['clima']
    );
            $pistaController->adicionarPista($novaPista);
            echo '<p>Nova pista adicionada com sucesso!</p>';
        }

        // Verifique se o formulário foi enviado para atualizar um pista existente
        if (isset($_POST['updatePista'])) {
            $pistaId = $_POST['pista_id'];
            $dadosAtualizados = array(
                'cidade' => $_POST['cidade'],
        'distancia' => $_POST['distancia'],
        'país' => $_POST['pais'],
        'clima' => $_POST['clima']
            );
            $pistaController->atualizarPista($pistaId, $dadosAtualizados);
            echo '<p>Pista atualizada com sucesso!</p>';
        }

        // Verifique se o formulário foi enviado para excluir um pista
        if (isset($_POST['deletePista'])) {
            $pistaId = $_POST['pista_id'];
            $pistaController->deletarPista($pistaId);
            echo '<p>Pista excluída com sucesso!</p>';
        }
    }
    ?>
    <div class="lista">
        <?php
    $pistas = $pistaController->listarPistas();
    if (!empty($pistas)) {
        echo '<h2>Lista de Pistas</h2>';
        echo '<ul>';
        foreach ($pistas as $pista) {
            echo '<li>' . 
                    '<span>Cidade: ' . $pista['cidade'] . ' - </span>' .
                    '<span>Distância: ' . $pista['distancia'] . ' - </span>' .
                    '<span>País: ' . $pista['país'] . ' - </span>' .
                    '<span>Clima: ' . $pista['clima'] . '</span>' .
                 '</li>';
        }
        
    } else {
        echo '<p>Nenhuma pista encontrada.</p>';
    }
    ?>
</div>
<h2>Adicionar Pista</h2>
<form method="post">
    <label for="cidade">Cidade:</label><br>
    <input type="text" id="cidade" name="cidade" required><br>
    <label for="distancia">Distância:</label><br>
    <input type="text" id="distancia" name="distancia" required><br>
    <label for="país">País:</label><br>
    <input type="text" id="país" name="país" required><br>
    <label for="clima">Clima:</label><br>
    <input type="text" id="clima" name="clima" required><br><br>
    <button type="submit" name="addPista">Adicionar Pista</button>
</form>

<h2>Atualizar Pista</h2>
<form method="post">
    <label for="pista_id">ID da Pista:</label><br>
    <input type="number" id="pista_id" name="pista_id" required><br>
    <label for="cidade">Nova Cidade:</label><br>
    <input type="text" id="cidade" name="cidade" required><br>
    <label for="distancia">Nova Distância:</label><br>
    <input type="text" id="distancia" name="distancia" required><br>
    <label for="país">Novo País:</label><br>
    <input type="text" id="país" name="país" required><br>
    <label for="clima">Novo Clima:</label><br>
    <input type="text" id="clima" name="clima" required><br><br>
    <button type="submit" name="updatePista">Atualizar Pista</button>
</form>

<h2>Excluir Pista</h2>
<form method="post">
    <label for="pista_id">ID da Pista:</label><br>
    <input type="number" id="pista_id" name="pista_id" required><br><br>
    <button type="submit" name="deletePista">Excluir Pista</button>
    <a href="page.php">Voltar</a>
</form>



</body>
</html>
