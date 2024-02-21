<?php

include_once 'C:\xampp\htdocs\revisao\src\app\Model\EquipesModel.php';

class EquipeController {
    private $equipeModel;

    public function __construct() {
        $this->equipeModel = new EquipeModel();
    }

    // Método para listar todas as equipes
    public function listarEquipes() {
        return $this->equipeModel->ListarEquipes();
    }

    // Método para obter uma equipe por ID
    public function getEquipeById($id) {
        return $this->equipeModel->getEquipeById($id);
    }

    // Método para adicionar uma nova equipe
    public function adicionarEquipe($novaEquipe) {
        $this->equipeModel->adicionarEquipe($novaEquipe);
    }

    // Método para excluir uma equipe por ID
    public function deletarEquipe($id) {
        return $this->equipeModel->deletarEquipe($id);
    }

    // Método para atualizar uma equipe por ID
    public function atualizarEquipe($id, $dadosAtualizados) {
        return $this->equipeModel->atualizarEquipe($id, $dadosAtualizados);
    }
}

?>
