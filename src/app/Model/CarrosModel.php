<?php

class CarroModel {
    private $carros;

    public function __construct() {
        // Inicializando as carros
        $this->carros = array(
            array("id" => 1,"modelo" => "Ferrari SF21", "cor" => "Vermelho", "ano_fabricacao" => 2021, "potencia_motor" => "850cv", "peso" => "752kg"),
    array("id" => 2,"modelo" => "Mercedes-AMG F1 W12", "cor" => "Prata", "ano_fabricacao" => 2021, "potencia_motor" => "900cv", "peso" => "752kg"),
    array("id" => 3,"modelo" => "Red Bull RB16B", "cor" => "Azul", "ano_fabricacao" => 2021, "potencia_motor" => "850cv", "peso" => "752kg"),
    array("id" => 4,"modelo" => "McLaren MCL35M", "cor" => "Laranja", "ano_fabricacao" => 2021, "potencia_motor" => "850cv", "peso" => "752kg"),
    array("id" => 5,"modelo" => "Alpine A521", "cor" => "Preto", "ano_fabricacao" => 2021, "potencia_motor" => "850cv", "peso" => "752kg")
        );
    }

    // Método para obter todas as carros
    public function ListarCarros() {
        return $this->carros;
    }

    // Método para obter uma carro por ID
    public function getCarroById($id) {
        foreach ($this->carros as $carro) {
            if ($carro['id'] == $id) {
                return $carro;
            }
        }
        return null; // Retorna null se a carro não for encontrada
    }

    // Método para adicionar uma nova carro
    public function adicionarCarro($novaCarro) {
        $novaCarro['id'] = count($this->carros) + 1; // Gera um novo ID para a carro
        $this->carros[] = $novaCarro;
    }

    // Método para excluir uma carro por ID
    public function deletarCarro($id) {
        foreach ($this->carros as $key => $carro) {
            if ($carro['id'] == $id) {
                unset($this->carros[$key]); // Remove a carro do array
                return true; // Retorna verdadeiro se a carro for excluída com sucesso
            }
        }
        return false; // Retorna falso se a carro não for encontrada
    }

    // Método para atualizar uma carro por ID
    public function atualizarCarro($id, $dadosAtualizados) {
        foreach ($this->carros as &$carro) {
            if ($carro['id'] == $id) {
                $carro = array_merge($carro, $dadosAtualizados);
                return true;
            }
        }
        return false;
    }
}
?>