<?php

function getEnderecos() {
    $endereco = new Endereco();
    $endereco->select(array('id', 'logradouro', 'cidade', 'estado'));
    $endereco->get();
    $enderecos = $endereco->all_to_array();
    $return = array();
    foreach ($enderecos as $temp) {
        $id = $temp['id'];
        $name = $temp['logradouro'] . ", " . $temp['cidade'] . ", " . $temp['estado'];
        $return[] = array('id' => $id, 'name' => $name);
    }
    return $return;
}
function getCargos() {
    $cargo = new Cargo();
    $cargo->select(array('id', 'descricao', 'salario'));
    $cargo->get();
    $cargos = $cargo->all_to_array();
    $return = array();
    foreach ($cargos as $temp) {
        $id = $temp['id'];
        $name = $temp['descricao'] . ", R$ " . $temp['salario'];
        $return[] = array('id' => $id, 'name' => $name);
    }
    return $return;
}
