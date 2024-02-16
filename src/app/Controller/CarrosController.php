<?php

include_once 'C:\xampp\htdocs\revisao\src\app\Model\CarrosModel.php';

class CarroController {
    private $carroModel;

    public function __construct() {
        $this->carroModel = new CarroModel();
    }

    // Método para listar todas as carros
    public function listarCarros() {
        return $this->carroModel->ListarCarros();
    }

    // Método para obter uma carro por ID
    public function getCarroById($id) {
        return $this->carroModel->getCarroById($id);
    }

    // Método para adicionar uma nova carro
    public function adicionarCarro($novaCarro) {
        $this->carroModel->adicionarCarro($novaCarro);
    }

    // Método para excluir uma carro por ID
    public function deletarCarro($id) {
        return $this->carroModel->deletarCarro($id);
    }

    // Método para atualizar uma carro por ID
    public function atualizarCarro($id, $dadosAtualizados) {
        return $this->carroModel->atualizarCarro($id, $dadosAtualizados);
    }
}

?>
