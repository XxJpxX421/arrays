<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Corrida</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }

    #track {
        width: 100%;
        height: 200px;
        background-color: #eee;
        position: relative;
    }

    .car {
        width: 50px;
        height: 30px;
        left: 80px;
        position: relative;
        top: 40px; /* Ajuste da posição inicial do carro */
        margin-top: 5px;
    }

    .finish-line {
        position: absolute;
        right: 50px;
        width: 7px;
        top: 0px;
        height: 200px; /* Ajuste a altura da linha para acomodar os quadradinhos */
    }
    .finish-line div {
        width: 100%;
        height: 20px; /* Altura dos quadradinhos */
    }
    .finish-line div:nth-child(odd) {
        background-color: black; /* Fundo preto para os quadradinhos ímpares */
    }
    .finish-line div:nth-child(even) {
        background-color: white; /* Fundo branco para os quadradinhos pares */
    }
    #startButton {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 10px 20px;
        font-size: 18px;
        color: white;
        background-color: #4CAF50;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    #startButton:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
    <h1>Jogo de Corrida</h1>
    <p>Pressione a barra de espaço para mover o carro.</p>
    <div id="track">
        <div id="car" class="car"></div>
        <div class="car opponent" id="opponent1"></div> <!-- Carro oponente 1 -->
        <div class="car opponent" id="opponent2"></div> <!-- Carro oponente 2 -->
        <div class="finish-line">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <button id="startButton">Iniciar Corrida</button>
    </div>

    <label for="carSelect">Escolha o carro:</label>
    <select id="carSelect">
        <option value="Vermelho">Ferrari SF21</option>
        <option value="Prata">Mercedes-AMG F1 W12</option>
        <option value="Azul">Red Bull RB16B</option>
        <option value="Laranja">McLaren MCL35M</option>
        <option value="Preto">Alpine A521</option>
    </select>

    <label for="colorSelect">Escolha a cor:</label>
    <select id="colorSelect">
        <option value="red">Vermelho</option>
        <option value="silver">Prata</option>
        <option value="blue">Azul</option>
        <option value="orange">Laranja</option>
        <option value="black">Preto</option>
    </select>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const track = document.getElementById('track');
            const car = document.getElementById('car');
            const opponents = document.querySelectorAll('.opponent'); // Seleciona todos os carros oponentes
            const finishLine = document.querySelector('.finish-line');
            const carSelect = document.getElementById('carSelect');
            const colorSelect = document.getElementById('colorSelect');
            const startButton = document.getElementById('startButton');
            const trackWidth = track.offsetWidth;
            const carWidth = car.offsetWidth;
            const spaceBetweenCars = 50; // Espaço entre os carros

            // Definindo a cor e a posição inicial dos carros oponentes
            opponents.forEach(function(opponent, index) {
                opponent.style.backgroundColor = colorSelect.options[index].value;
                opponent.style.left = `80px`; // Ajuste da posição inicial dos carros oponentes
            });

            // Função para mover o carro
            function moveCar(element, speed) {
                const currentLeft = parseInt(element.style.left.replace('px', '')) || 0;
                const newLeft = currentLeft + speed;
                if (newLeft + carWidth >= trackWidth) {
                    resetRace(); // Resetar a corrida quando o carro atingir a linha de chegada
                    return true; // Parar o movimento do carro
                }
                element.style.left = newLeft + 'px';
                return false;
            }

            // Função para verificar se um dos carros venceu
            function checkWinner() {
                if (parseInt(car.style.left.replace('px', '')) + carWidth >= trackWidth) {
                    return 'Você';
                }
                for (const opponent of opponents) {
                    if (parseInt(opponent.style.left.replace('px', '')) + carWidth >= trackWidth) {
                        return `O carro ${opponent.id}`;
                    }
                }
                return '';
            }

            // Função para resetar a corrida
            function resetRace() {
    clearInterval(opponentInterval); // Interromper o movimento dos oponentes
    car.style.left = '80px'; // Define a posição inicial do carro do jogador
    opponents.forEach(function(opponent, index) {
        opponent.style.left = `80px`; // Define a posição inicial correta para cada oponente
    });
    if (winner !== 'Você') {
        winner = opponents[parseInt(winner.replace('opponent', '')) - 1]; // Se o vencedor não for o jogador, define-o como um oponente
    }
    winner.style.left = '80px'; // Define a posição inicial do vencedor (se for o jogador)
    startButton.style.display = 'block'; // Exibe novamente o botão de iniciar
}

            // Event listener para a tecla de espaço
            document.addEventListener('keydown', function(event) {
                if (event.code === 'Space') {
                    if (moveCar(car, 20)) {
                        alert('Você chegou à linha de chegada! Parabéns, você venceu!');
                        resetRace();
                    } else {
                        const winner = checkWinner();
                        if (winner !== '') {
                            alert(`${winner} chegou à linha de chegada primeiro!`);
                            resetRace();
                        }
                    }
                }
            });

            // Event listener para selecionar o carro e a cor
            carSelect.addEventListener('change', function() {
                car.style.backgroundColor = colorSelect.value;
            });

            colorSelect.addEventListener('change', function() {
                car.style.backgroundColor = colorSelect.value;
            });

            // Movimento automático dos carros oponentes
            let opponentInterval;
            function startRace() {
                startButton.style.display = 'none'; // Esconde o botão de iniciar
                function startOpponentMovement() {
                    opponentInterval = setInterval(function() {
                        for (const opponent of opponents) {
                            const currentLeft = parseInt(opponent.style.left.replace('px', '')) || 0;
                            const newLeft = currentLeft + (opponent.id === 'opponent1' ? 30 : 20);
                            if (newLeft + carWidth >= trackWidth) {
                                alert(`O carro ${opponent.id} chegou à linha de chegada primeiro!`);
                                resetRace();
                            }
                            opponent.style.left = newLeft + 'px';
                        }
                    }, 500);
                }

                // Chamar a função para iniciar o movimento dos oponentes
                startOpponentMovement();
            }

            startButton.addEventListener('click', function() {
                startRace();
            });
        });
    </script>
</body>
</html>