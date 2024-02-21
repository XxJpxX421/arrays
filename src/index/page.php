<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Races</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .header {
      text-align: center;
      background-color: #333;
      color: #fff;
      padding: 20px 0;
    }
    .header h1 {
      margin: 0;
      font-size: 36px;
    }
    .container {
      text-align: center;
      margin-top: 50px;
    }
    .container button {
      padding: 10px 20px;
      font-size: 18px;
      margin: 10px;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .container button:hover {
      background-color: #555;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>Races</h1>
  </div>
  <div class="container">
    <button onclick="window.location.href='carros.php'">Registro de Carros</button>
    <button onclick="window.location.href='pilotos.php'">Registro de Pilotos</button>
    <button onclick="window.location.href='classificacao.php'">Classificação</button>
    <button onclick="window.location.href='pistas.php'">Registro de Pistas</button>
    <button onclick="window.location.href='equipés.php'">Registro de Equipes</button>
  </div>
</body>
</html>
