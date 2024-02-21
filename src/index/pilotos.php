<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Pilotos</title>
    <link rel="stylesheet" href="public/css/registros.css">
</head>
<body>
    <?php
    // Inclua o arquivo do controlador
    include_once 'C:\xampp\htdocs\revisao\src\app\Controller\PilotosController.php';

    // Crie uma instância do controlador
    $pilotoController = new PilotoController();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifique se o formulário foi enviado para adicionar um novo piloto
        if (isset($_POST['addPiloto'])) {
            $novaPiloto = array(
        'nome' => $_POST['nome'],
        'idade' => $_POST['idade'],
        'peso' => $_POST['peso'],
        'equipe' => $_POST['equipe'],
        'país' => $_POST['país']
    );
            $pilotoController->adicionarPiloto($novaPiloto);
            echo '<p>Novo piloto adicionado com sucesso!</p>';
        }

        // Verifique se o formulário foi enviado para atualizar um piloto existente
        if (isset($_POST['updatePiloto'])) {
            $pilotoId = $_POST['piloto_id'];
            $dadosAtualizados = array(
                'nome' => $_POST['nome'],
                'idade' => $_POST['idade'],
                'peso' => $_POST['peso'],
                'equipe' => $_POST['equipe'],
                'país' => $_POST['país']
            );
            $pilotoController->atualizarPiloto($pilotoId, $dadosAtualizados);
            echo '<p>Piloto atualizado com sucesso!</p>';
        }

        // Verifique se o formulário foi enviado para excluir um piloto
        if (isset($_POST['deletePiloto'])) {
            $pilotoId = $_POST['piloto_id'];
            $pilotoController->deletarPiloto($pilotoId);
            echo '<p>Piloto excluído com sucesso!</p>';
        }
    }
    ?>
    <div class="lista">
        <?php
    $pilotos = $pilotoController->listarPilotos();
    if (!empty($pilotos)) {
        echo '<h2>Lista de Pilotos</h2>';
        echo '<ul>';
        foreach ($pilotos as $piloto) {
            echo '<li>' . 
                    '<span>Id: ' . $piloto['id'] . ' - </span>' .
                    '<span>Nome: ' . $piloto['nome'] . ' - </span>' . 
                    '<span>Idade: ' . $piloto['idade'] . ' - </span>' .
                    '<span>Peso: ' . $piloto['peso'] . ' - </span>' .
                    '<span>Equipe: ' . $piloto['equipe'] . ' - </span>' .
                    '<span>País: ' . $piloto['país'] . '</span>' .
                 '</li>';
        } 
    } else {
        echo '<p>Nenhum piloto encontrado.</p>';
    }
    ?>
</div>
<h2>Adicionar Piloto</h2>
<form method="post">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" required><br>
    <label for="idade">Idade:</label><br>
    <input type="number" id="idade" name="idade" required><br>
    <label for="peso">Peso:</label><br>
    <input type="number" id="peso" name="peso" required><br>
    <label for="equipe">Equipe:</label><br>
    <input type="text" id="equipe" name="equipe" required><br>
    <label for="país">País:</label><br>
    <input type="text" id="país" name="país" required><br><br>
    <button type="submit" name="addPiloto">Adicionar Piloto</button>
</form>

<h2>Atualizar Piloto</h2>
<form method="post">
    <label for="piloto_id">ID do Piloto:</label><br>
    <input type="number" id="piloto_id" name="piloto_id" required><br>
    <label for="nome">Novo Nome:</label><br>
    <input type="text" id="nome" name="nome" required><br>
    <label for="idade">Nova Idade:</label><br>
    <input type="number" id="idade" name="idade" required><br>
    <label for="peso">Novo Peso:</label><br>
    <input type="number" id="peso" name="peso" required><br>
    <label for="equipe">Nova Equipe:</label><br>
    <input type="text" id="equipe" name="equipe" required><br>
    <label for="país">Novo País:</label><br>
    <input type="text" id="país" name="país" required><br><br>
    <button type="submit" name="updatePiloto">Atualizar Piloto</button>
</form>

<h2>Excluir Piloto</h2>
<form method="post">
    <label for="piloto_id">ID do Piloto:</label><br>
    <input type="number" id="piloto_id" name="piloto_id" required><br><br>
    <button type="submit" name="deletePiloto">Excluir Piloto</button>
    <a href="page.php">Voltar</a>
</form>

</body>
</html>
