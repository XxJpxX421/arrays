<?php

include_once 'C:\xampp\htdocs\revisao\src\app\Model\PilotosModel.php';

class PilotoController {
    private $pilotoModel;

    public function __construct() {
        $this->pilotoModel = new PilotoModel();
    }

    // Método para listar todas as pilotos
    public function listarPilotos() {
        return $this->pilotoModel->ListarPilotos();
    }

    // Método para obter uma piloto por ID
    public function getPilotoById($id) {
        return $this->pilotoModel->getPilotoById($id);
    }

    // Método para adicionar uma nova piloto
    public function adicionarPiloto($novaPiloto) {
        $this->pilotoModel->adicionarPiloto($novaPiloto);
    }

    // Método para excluir uma piloto por ID
    public function deletarPiloto($id) {
        return $this->pilotoModel->deletarPiloto($id);
    }

    // Método para atualizar uma piloto por ID
    public function atualizarPiloto($id, $dadosAtualizados) {
        return $this->pilotoModel->atualizarPiloto($id, $dadosAtualizados);
    }
}

?>
