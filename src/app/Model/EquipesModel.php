<?php

class EquipeModel {
    private $equipes;

    public function __construct() {
        // Inicializando as equipes
        $this->equipes = array(
            array("id" => 1,"lider" => "José", "nome" => "LOUD", "patrocinadores" => "Empresa A, Empresa B", "sede" => "São Paulo", "ano_fundacao" => 2019, "campeonatos_vencidos" => 5),
            array("id" => 2,"lider" => "Maria", "nome" => "FURIA", "patrocinadores" => "Empresa C, Empresa D", "sede" => "Rio de Janeiro", "ano_fundacao" => 2017, "campeonatos_vencidos" => 3),
            array("id" => 3,"lider" => "Carlos", "nome" => "INTZ", "patrocinadores" => "Empresa E, Empresa F", "sede" => "Belo Horizonte", "ano_fundacao" => 2014, "campeonatos_vencidos" => 2),
            array("id" => 4,"lider" => "Ana", "nome" => "paIN", "patrocinadores" => "Empresa G, Empresa H", "sede" => "Curitiba", "ano_fundacao" => 2016, "campeonatos_vencidos" => 4),
            array("id" => 5,"lider" => "Rafael", "nome" => "LOS", "patrocinadores" => "Empresa I, Empresa J", "sede" => "Porto Alegre", "ano_fundacao" => 2018, "campeonatos_vencidos" => 1),
            array("id" => 6,"lider" => "Wesley", "nome" => "Fluxo", "patrocinadores" => "Empresa K, Empresa L", "sede" => "Bahia", "ano_fundacao" => 2020, "campeonatos_vencidos" => 0)
        );
    }

    // Método para obter todas as equipes
    public function ListarEquipes() {
        return $this->equipes;
    }

    // Método para obter uma equipe por ID
    public function getEquipeById($id) {
        foreach ($this->equipes as $equipe) {
            if ($equipe['id'] == $id) {
                return $equipe;
            }
        }
        return null; // Retorna null se a equipe não for encontrada
    }

    // Método para adicionar uma nova equipe
    public function adicionarEquipe($novaEquipe) {
        $novaEquipe['id'] = count($this->equipes) + 1; // Gera um novo ID para a equipe
        $this->equipes[] = $novaEquipe;
    }

    // Método para excluir uma equipe por ID
    public function deletarEquipe($id) {
        foreach ($this->equipes as $key => $equipe) {
            if ($equipe['id'] == $id) {
                unset($this->equipes[$key]); // Remove a equipe do array
                return true; // Retorna verdadeiro se a equipe for excluída com sucesso
            }
        }
        return false; // Retorna falso se a equipe não for encontrada
    }

    // Método para atualizar uma equipe por ID
    public function atualizarEquipe($id, $dadosAtualizados) {
        foreach ($this->equipes as &$equipe) {
            if ($equipe['id'] == $id) {
                $equipe = array_merge($equipe, $dadosAtualizados);
                return true;
            }
        }
        return false;
    }
}
?>