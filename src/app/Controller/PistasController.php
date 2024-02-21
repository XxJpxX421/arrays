<?php

include_once 'C:\xampp\htdocs\revisao\src\app\Model\PistasModel.php';

class PistaController {
    private $pistaModel;

    public function __construct() {
        $this->pistaModel = new PistaModel();
    }

    // Método para listar todas as pistas
    public function listarPistas() {
        return $this->pistaModel->ListarPistas();
    }

    // Método para obter uma pista por ID
    public function getPistaById($id) {
        return $this->pistaModel->getPistaById($id);
    }

    // Método para adicionar uma nova pista
    public function adicionarPista($novaPista) {
        $this->pistaModel->adicionarPista($novaPista);
    }

    // Método para excluir uma pista por ID
    public function deletarPista($id) {
        return $this->pistaModel->deletarPista($id);
    }

    // Método para atualizar uma pista por ID
    public function atualizarPista($id, $dadosAtualizados) {
        return $this->pistaModel->atualizarPista($id, $dadosAtualizados);
    }
}

?>
