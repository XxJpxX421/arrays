<?php
$pistas = array(
    array("id" => 1,"cidade" => "São Paulo", "distancia" => 500, "país" => "Brasil", "clima" => "Quente"),
    array("id" => 2,"cidade" => "Londres", "distancia" => 1000, "país" => "Reino Unido", "clima" => "Temperado"),
    array("id" => 3,"cidade" => "Tóquio", "distancia" => 1200, "país" => "Japão", "clima" => "Temperado"),
    array("id" => 4,"cidade" => "Nova York", "distancia" => 800, "país" => "Estados Unidos", "clima" => "Temperado"),
    array("id" => 5,"cidade" => "Sydney", "distancia" => 1500, "país" => "Austrália", "clima" => "Quente"),
    array("id" => 6,"cidade" => "Paris", "distancia" => 900, "país" => "França", "clima" => "Temperado")
);
$pilotos = array(
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
$carros = array(
    array("id" => 1,"modelo" => "Ferrari SF21", "cor" => "Vermelho", "ano_fabricacao" => 2021, "potencia_motor" => "850cv", "peso" => "752kg"),
    array("id" => 2,"modelo" => "Mercedes-AMG F1 W12", "cor" => "Prata", "ano_fabricacao" => 2021, "potencia_motor" => "900cv", "peso" => "752kg"),
    array("id" => 3,"modelo" => "Red Bull RB16B", "cor" => "Azul", "ano_fabricacao" => 2021, "potencia_motor" => "850cv", "peso" => "752kg"),
    array("id" => 4,"modelo" => "McLaren MCL35M", "cor" => "Laranja", "ano_fabricacao" => 2021, "potencia_motor" => "850cv", "peso" => "752kg"),
    array("id" => 5,"modelo" => "Alpine A521", "cor" => "Preto", "ano_fabricacao" => 2021, "potencia_motor" => "850cv", "peso" => "752kg")
);
$equipes = array(
    array("id" => 1,"lider" => "José", "nome" => "LOUD", "patrocinadores" => "Empresa A, Empresa B", "sede" => "São Paulo", "ano_fundacao" => 2019, "campeonatos_vencidos" => 5),
    array("id" => 2,"lider" => "Maria", "nome" => "FURIA", "patrocinadores" => "Empresa C, Empresa D", "sede" => "Rio de Janeiro", "ano_fundacao" => 2017, "campeonatos_vencidos" => 3),
    array("id" => 3,"lider" => "Carlos", "nome" => "INTZ", "patrocinadores" => "Empresa E, Empresa F", "sede" => "Belo Horizonte", "ano_fundacao" => 2014, "campeonatos_vencidos" => 2),
    array("id" => 4,"lider" => "Ana", "nome" => "paIN", "patrocinadores" => "Empresa G, Empresa H", "sede" => "Curitiba", "ano_fundacao" => 2016, "campeonatos_vencidos" => 4),
    array("id" => 5,"lider" => "Rafael", "nome" => "LOS", "patrocinadores" => "Empresa I, Empresa J", "sede" => "Porto Alegre", "ano_fundacao" => 2018, "campeonatos_vencidos" => 1),
    array("id" => 6,"lider" => "Wesley", "nome" => "Fluxo", "patrocinadores" => "Empresa K, Empresa L", "sede" => "Bahia", "ano_fundacao" => 2020, "campeonatos_vencidos" => 0)
);
$corrida = array(
    "id" => uniqid(),
    "pista" => $pista,
    "data" => $dataCorrida,
    "pilotos" => array() 
);
?>