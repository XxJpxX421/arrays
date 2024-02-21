<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preparo para a Corrida</title>
    <link rel="stylesheet" href="public/css/corrida.css">
</head>
<body>
    <?php
    include_once 'C:\xampp\htdocs\revisao\src\app\Controller\CarrosController.php';
    include_once 'C:\xampp\htdocs\revisao\src\app\Controller\PilotosController.php';
    include_once 'C:\xampp\htdocs\revisao\src\app\Controller\EquipesController.php';
    include_once 'C:\xampp\htdocs\revisao\src\app\Controller\PistasController.php';

    $carroController = new CarroController();
    $pistaController = new PistaController();
    $equipeController = new EquipeController();
    $pilotoController = new PilotoController();

    $carros = $carroController->listarCarros();
    $pistas = $pistaController->listarPistas();
    $pilotos = $pilotoController->listarPilotos();
    $equipes = $equipeController->listarEquipes();
    ?>
    <h2>Selecionar Competidores</h2>
    <form method="post" action= "index.php">
        <h3>Competidor 1</h3>
        <label for="piloto1">Piloto:</label><br>
        <select id="piloto1" name="piloto1" required>
            <option value="">Selecione um piloto</option>
            <?php foreach ($pilotos as $piloto): ?>
                <option value="<?php echo $piloto['nome']; ?>"><?php echo $piloto['nome']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="carro1">Carro:</label><br>
        <select id="carro1" name="carro1" required>
            <option value="">Selecione um carro</option>
            <?php foreach ($carros as $carro): ?>
                <option value="<?php echo $carro['modelo']; ?>"><?php echo $carro['modelo']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="equipe1">Equipe:</label><br>
        <select id="equipe1" name="equipe1" required>
            <option value="">Selecione uma equipe</option>
            <?php foreach ($equipes as $equipe): ?>
                <option value="<?php echo $equipe['nome']; ?>"><?php echo $equipe['nome']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <h3>Competidor 2</h3>
        <label for="piloto2">Piloto:</label><br>
        <select id="piloto2" name="piloto2" required>
            <option value="">Selecione um piloto</option>
            <?php foreach ($pilotos as $piloto): ?>
                <option value="<?php echo $piloto['nome']; ?>"><?php echo $piloto['nome']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="carro2">Carro:</label><br>
        <select id="carro2" name="carro2" required>
            <option value="">Selecione um carro</option>
            <?php foreach ($carros as $carro): ?>
                <option value="<?php echo $carro['modelo']; ?>"><?php echo $carro['modelo']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="equipe2">Equipe:</label><br>
        <select id="equipe2" name="equipe2" required>
            <option value="">Selecione uma equipe</option>
            <?php foreach ($equipes as $equipe): ?>
                <option value="<?php echo $equipe['nome']; ?>"><?php echo $equipe['nome']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <h3>Competidor 3</h3>
        <label for="piloto3">Piloto:</label><br>
        <select id="piloto3" name="piloto3" required>
            <option value="">Selecione um piloto</option>
            <?php foreach ($pilotos as $piloto): ?>
                <option value="<?php echo $piloto['nome']; ?>"><?php echo $piloto['nome']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="carro3">Carro:</label><br>
        <select id="carro3" name="carro3" required>
            <option value="">Selecione um carro</option>
            <?php foreach ($carros as $carro): ?>
                <option value="<?php echo $carro['modelo']; ?>"><?php echo $carro['modelo']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="equipe3">Equipe:</label><br>
        <select id="equipe3" name="equipe3" required>
            <option value="">Selecione uma equipe</option>
            <?php foreach ($equipes as $equipe): ?>
                <option value="<?php echo $equipe['nome']; ?>"><?php echo $equipe['nome']; ?></option>
            <?php endforeach; ?>
        </select><br>
        
        <h3>Competidor 4</h3>
        <label for="piloto4">Piloto:</label><br>
        <select id="piloto4" name="piloto4" required>
            <option value="">Selecione um piloto</option>
            <?php foreach ($pilotos as $piloto): ?>
                <option value="<?php echo $piloto['nome']; ?>"><?php echo $piloto['nome']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="carro4">Carro:</label><br>
        <select id="carro4" name="carro4" required>
            <option value="">Selecione um carro</option>
            <?php foreach ($carros as $carro): ?>
                <option value="<?php echo $carro['modelo']; ?>"><?php echo $carro['modelo']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="equipe4">Equipe:</label><br>
        <select id="equipe4" name="equipe4" required>
            <option value="">Selecione uma equipe</option>
            <?php foreach ($equipes as $equipe): ?>
                <option value="<?php echo $equipe['nome']; ?>"><?php echo $equipe['nome']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <h3>Competidor 5</h3>
        <label for="piloto5">Piloto:</label><br>
        <select id="piloto5" name="piloto5" required>
            <option value="">Selecione um piloto</option>
            <?php foreach ($pilotos as $piloto): ?>
                <option value="<?php echo $piloto['nome']; ?>"><?php echo $piloto['nome']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="carro5">Carro:</label><br>
        <select id="carro5" name="carro5" required>
            <option value="">Selecione um carro</option>
            <?php foreach ($carros as $carro): ?>
                <option value="<?php echo $carro['modelo']; ?>"><?php echo $carro['modelo']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="equipe5">Equipe:</label><br>
        <select id="equipe5" name="equipe5" required>
            <option value="">Selecione uma equipe</option>
            <?php foreach ($equipes as $equipe): ?>
                <option value="<?php echo $equipe['nome']; ?>"><?php echo $equipe['nome']; ?></option>
            <?php endforeach; ?>
        </select><br>

    <br>
    <h2>Escolher a Pista</h2>
    <label for="pista">Pista:</label><br>
<select id="pista" name="pista" required>
    <option value="">Selecione uma pista</option>
    <?php foreach ($pistas as $pista): ?>
        <option value="<?php echo $pista['cidade']; ?>"><?php echo $pista['cidade']; ?></option>
    <?php endforeach; ?>
</select><br><br>


    <button type="submit" name="submit">Confirmar Competidores</button>
</form>

</body>
</html>

