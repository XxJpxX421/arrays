<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Equipes</title>
    <link rel="stylesheet" href="public/css/registros.css">
</head>
<body>
    <?php
    // Inclua o arquivo do controlador
    include_once 'C:\xampp\htdocs\revisao\src\app\Controller\EquipesController.php';

    // Crie uma instância do controlador
    $equipeController = new EquipeController();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifique se o formulário foi enviado para adicionar um novo equipe
        if (isset($_POST['addEquipe'])) {
            $novaEquipe = array(
        'lider' => $_POST['lider'],
        'nome' => $_POST['nome'],
        'patrocinadores' => $_POST['patrocinadores'],
        'sede' => $_POST['sede'],
        'ano_fundacao' => $_POST['ano'],
        'campeonatos_vencidos' => $_POST['camps']
    );
            $equipeController->adicionarEquipe($novaEquipe);
            echo '<p>Nova equipe adicionada com sucesso!</p>';
        }

        // Verifique se o formulário foi enviado para atualizar um equipe existente
        if (isset($_POST['updateEquipe'])) {
            $equipeId = $_POST['equipe_id'];
            $dadosAtualizados = array(
                'lider' => $_POST['lider'],
        'nome' => $_POST['nome'],
        'patrocinadores' => $_POST['patrocinadores'],
        'sede' => $_POST['sede'],
        'ano_fundacao' => $_POST['ano'],
        'campeonatos_vencidos' => $_POST['camps']
            );
            $equipeController->atualizarEquipe($equipeId, $dadosAtualizados);
            echo '<p>Equipe atualizada com sucesso!</p>';
        }

        // Verifique se o formulário foi enviado para excluir um equipe
        if (isset($_POST['deleteEquipe'])) {
            $equipeId = $_POST['equipe_id'];
            $equipeController->deletarEquipe($equipeId);
            echo '<p>Equipe excluída com sucesso!</p>';
        }
    }
    ?>
    <div class="lista">
        <?php
    $equipes = $equipeController->listarEquipes();
    if (!empty($equipes)) {
        echo '<h2>Lista de Equipes</h2>';
        echo '<ul>';
        foreach ($equipes as $equipe) {
            echo '<li>' . 
                    '<span>Id: ' . $equipe['id'] . ' - </span>' .
                    '<span>Líder: ' . $equipe['lider'] . ' - </span>' .
                    '<span>Nome: ' . $equipe['nome'] . ' - </span>' . 
                    '<span>Patrocinadores: ' . $equipe['patrocinadores'] . ' - </span>' .
                    '<span>Sede: ' . $equipe['sede'] . ' - </span>' .
                    '<span>Ano de Fundação: ' . $equipe['ano_fundacao'] . ' - </span>' .
                    '<span>Campeonatos Vencidos: ' . $equipe['campeonatos_vencidos'] . '</span>' .
                 '</li>';
        }
    } else {
        echo '<p>Nenhuma equipe encontrada.</p>';
    }
    ?>
</div>
<h2>Adicionar Equipe</h2>
<form method="post">
    <label for="lider">Líder:</label><br>
    <input type="text" id="lider" name="lider" required><br>
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" required><br>
    <label for="patrocinadores">Patrocinadores:</label><br>
    <input type="text" id="patrocinadores" name="patrocinadores" required><br>
    <label for="sede">Sede:</label><br>
    <input type="text" id="sede" name="sede" required><br>
    <label for="ano_fundacao">Ano de Fundação:</label><br>
    <input type="number" id="ano_fundacao" name="ano_fundacao" required><br>
    <label for="campeonatos_vencidos">Campeonatos Vencidos:</label><br>
    <input type="number" id="campeonatos_vencidos" name="campeonatos_vencidos" required><br><br>
    <button type="submit" name="addEquipe">Adicionar Equipe</button>
</form>

<h2>Atualizar Equipe</h2>
<form method="post">
    <label for="equipe_id">ID da Equipe:</label><br>
    <input type="number" id="equipe_id" name="equipe_id" required><br>
    <label for="lider">Novo Líder:</label><br>
    <input type="text" id="lider" name="lider" required><br>
    <label for="nome">Novo Nome:</label><br>
    <input type="text" id="nome" name="nome" required><br>
    <label for="patrocinadores">Novos Patrocinadores:</label><br>
    <input type="text" id="patrocinadores" name="patrocinadores" required><br>
    <label for="sede">Nova Sede:</label><br>
    <input type="text" id="sede" name="sede" required><br>
    <label for="ano_fundacao">Novo Ano de Fundação:</label><br>
    <input type="number" id="ano_fundacao" name="ano_fundacao" required><br>
    <label for="campeonatos_vencidos">Campeonatos Vencidos:</label><br>
    <input type="number" id="campeonatos_vencidos" name="campeonatos_vencidos" required><br><br>
    <button type="submit" name="updateEquipe">Atualizar Equipe</button>
</form>

<h2>Excluir Equipe</h2>
<form method="post">
    <label for="equipe_id">ID da Equipe:</label><br>
    <input type="number" id="equipe_id" name="equipe_id" required><br><br>
    <button type="submit" name="deleteEquipe">Excluir Equipe</button>
    <a href="page.php">Voltar</a>
</form>


</body>
</html>
