<?php 
function infoIndividual($id) {
    $individuals = &$_SESSION['individuals'];

    if (isset($individuals[$id])) {
        $individual = $individuals[$id];
        return "$id\n{$individual['first_name']} {$individual['last_name']} {$individual['birthday']} {$individual['phone_number']}\n";
    } else {
        return "Erro: Registro $id não encontrado.";
    }
}
?>