<?php

class PilotoModel {
    private $pilotos;

    public function __construct() {
        // Inicializando as pilotos
        $this->pilotos = array(
            array("id" => 1,"nome" => "Pedrinho", "idade" => 37, "peso" => 68, "equipe" => "LOUD", "país" => "Brasil"),
    array("id" => 2,"nome" => "Vitinho", "idade" => 24, "peso" => 73, "equipe" => "LOUD", "país" => "Brasil"),
    array("id" => 3,"nome" => "Fillipinho", "idade" => 32, "peso" => 70, "equipe" => "FURIA", "país" => "Brasil"),
    array("id" => 4,"nome" => "Gustavinho", "idade" => 24, "peso" => 68, "equipe" => "FURIA", "país" => "Brasil"),
    array("id" => 5,"nome" => "Davizinho", "idade" => 22, "peso" => 68, "equipe" => "INTZ", "país" => "Brasil"),
    array("id" => 6,"nome" => "Joãozinho", "idade" => 32, "peso" => 70, "equipe" => "INTZ", "país" => "Brasil"),
    array("id" => 7,"nome" => "Mateuszinho", "idade" => 34, "peso" => 68, "equipe" => "paIN", "país" => "Brasil"),
    array("id" => 8,"nome" => "Henriquinho", "idade" => 40, "peso" => 68, "equipe" => "paIN", "país" => "Brasil"),
    array("id" => 9,"nome" => "Vinicinho", "idade" => 26, "peso" => 68, "equipe" => "LOS", "país" => "Brasil"),
    array("id" => 10,"nome" => "Reginho", "idade" => 25, "peso" => 68, "equipe" => "LOS", "país" => "Brasil"),
    array("id" => 11,"nome" => "Dioguinho", "idade" => 22, "peso" => 69, "equipe" => "Fluxo", "país" => "Brasil"),
    array("id" => 12,"nome" => "Fabinho", "idade" => 20, "peso" => 67, "equipe" => "Fluxo", "país" => "Brasil")
        );
    }

    // Método para obter todas as pilotos
    public function ListarPilotos() {
        return $this->pilotos;
    }

    // Método para obter uma piloto por ID
    public function getPilotoById($id) {
        foreach ($this->pilotos as $piloto) {
            if ($piloto['id'] == $id) {
                return $piloto;
            }
        }
        return null; // Retorna null se a piloto não for encontrada
    }

    // Método para adicionar uma nova piloto
    public function adicionarPiloto($novaPiloto) {
        $novaPiloto['id'] = count($this->pilotos) + 1; // Gera um novo ID para a piloto
        $this->pilotos[] = $novaPiloto;
    }

    // Método para excluir uma piloto por ID
    public function deletarPiloto($id) {
        foreach ($this->pilotos as $key => $piloto) {
            if ($piloto['id'] == $id) {
                unset($this->pilotos[$key]); // Remove a piloto do array
                return true; // Retorna verdadeiro se a piloto for excluída com sucesso
            }
        }
        return false; // Retorna falso se a piloto não for encontrada
    }

    // Método para atualizar uma piloto por ID
    public function atualizarPiloto($id, $dadosAtualizados) {
        foreach ($this->pilotos as &$piloto) {
            if ($piloto['id'] == $id) {
                $piloto = array_merge($piloto, $dadosAtualizados);
                return true;
            }
        }
        return false;
    }
}
?>