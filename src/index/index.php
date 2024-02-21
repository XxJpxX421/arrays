<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem irá disputar a Corrida!</title>
    <link rel="stylesheet" href="public/css/index.css">
</head>
<body>

<div class="container">
    <h2>Resultado da Corrida</h2>
    <div class="resultados">
        <div class="competidores">
            <div class="resultado">
                <p class="titulo">Competidores:</p>
                <ul id="competidores">
                    <?php
                    // Exibir os 5 competidores
                    for ($i = 1; $i <= 5; $i++) {
                        if (isset($_POST["piloto$i"], $_POST["carro$i"], $_POST["equipe$i"])) {
                            echo "<li>" . $_POST["piloto$i"] . " - " . $_POST["carro$i"] . " - " . $_POST["equipe$i"] . "</li>";
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <p class="titulo">Pista Selecionada:</p>
        <p><?php echo $_POST["pista"]; ?></p><br>
        <button class="botao-sorteio" onclick="sortearCompetidores()">Sortear Competidores</button> 
        <div class="ranking" id="ranking" style="display: none;"><br>
            <p class="titulo">Ranking:</p>
            <ul id="competidoresSorteados">
                <!-- Competidores sorteados serão adicionados aqui dinamicamente -->
            </ul>
        </div>
    </div>
</div>

<script>
    function sortearCompetidores() {
        var competidoresSorteados = [];
        <?php
        // Definir os competidores como um array PHP
        $competidores = array();
        for ($i = 1; $i <= 5; $i++) {
            if (isset($_POST["piloto$i"], $_POST["carro$i"], $_POST["equipe$i"])) {
                $competidores[] = array(
                    "piloto" => $_POST["piloto$i"],
                    "carro" => $_POST["carro$i"],
                    "equipe" => $_POST["equipe$i"]
                );
            }
        }
        // Transformar o array PHP em um array JavaScript
        echo "var competidores = " . json_encode($competidores) . ";";
        ?>
        
        while (competidoresSorteados.length < 3) {
            var index = Math.floor(Math.random() * competidores.length);
            var competidor = competidores[index];
            if (!competidoresSorteados.includes(competidor)) {
                competidoresSorteados.push(competidor);
            }
        }
        var rankingElement = document.getElementById("competidoresSorteados");
        rankingElement.innerHTML = ""; // Limpa qualquer conteúdo anterior
        competidoresSorteados.forEach(function(competidor) {
            var li = document.createElement("li");
            li.textContent = competidor.piloto;
            rankingElement.appendChild(li);
        });
        var rankingContainer = document.getElementById("ranking");
        rankingContainer.style.display = "block"; // Exibe o ranking
    }
</script>

</body>
</html>
