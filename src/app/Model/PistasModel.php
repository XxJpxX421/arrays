<?php

class PistaModel {
    private $pistas;

    public function __construct() {
        // Inicializando as pistas
        $this->pistas = array(
            array("id" => 1, "cidade" => "São Paulo", "distancia" => 500, "país" => "Brasil", "clima" => "Quente"),
            array("id" => 2, "cidade" => "Londres", "distancia" => 1000, "país" => "Reino Unido", "clima" => "Temperado"),
            array("id" => 3, "cidade" => "Tóquio", "distancia" => 1200, "país" => "Japão", "clima" => "Temperado"),
            array("id" => 4, "cidade" => "Nova York", "distancia" => 800, "país" => "Estados Unidos", "clima" => "Temperado"),
            array("id" => 5, "cidade" => "Sydney", "distancia" => 1500, "país" => "Austrália", "clima" => "Quente"),
            array("id" => 6, "cidade" => "Paris", "distancia" => 900, "país" => "França", "clima" => "Temperado")
        );
    }

    // Método para obter todas as pistas
    public function ListarPistas() {
        return $this->pistas;
    }

    // Método para obter uma pista por ID
    public function getPistaById($id) {
        foreach ($this->pistas as $pista) {
            if ($pista['id'] == $id) {
                return $pista;
            }
        }
        return null; // Retorna null se a pista não for encontrada
    }

    // Método para adicionar uma nova pista
    public function adicionarPista($novaPista) {
        $novaPista['id'] = count($this->pistas) + 1; // Gera um novo ID para a pista
        $this->pistas[] = $novaPista;
    }

    // Método para excluir uma pista por ID
    public function deletarPista($id) {
        foreach ($this->pistas as $key => $pista) {
            if ($pista['id'] == $id) {
                unset($this->pistas[$key]); // Remove a pista do array
                return true; // Retorna verdadeiro se a pista for excluída com sucesso
            }
        }
        return false; // Retorna falso se a pista não for encontrada
    }

    // Método para atualizar uma pista por ID
    public function atualizarPista($id, $dadosAtualizados) {
        foreach ($this->pistas as &$pista) {
            if ($pista['id'] == $id) {
                $pista = array_merge($pista, $dadosAtualizados);
                return true;
            }
        }
        return false;
    }
}
?>