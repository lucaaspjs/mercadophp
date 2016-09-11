<?php

function getEnderecos() {
    $endereco = new Endereco();
    $endereco->select(array('id', 'logradouro', 'cidade', 'estado'));
    $endereco->get();
    $ends = $endereco->all_to_array();
    $return = array();
    foreach ($ends as $end) {
        $id = $end['id'];
        $name = $end['logradouro'] . ", " . $end['cidade'] . ", " . $end['estado'];
        $return[] = array('id' => $id, 'name' => $name);
    }
    return $return;
}
