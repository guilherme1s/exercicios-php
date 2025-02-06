<?php 
function delIndividual($id) {
    $individuals = &$_SESSION['individuals'];
    
    if (isset($individuals[$id])) {
        unset($individuals[$id]);
        return "Registro $id removido.";
    } else {
        return "Erro: Registro $id não encontrado.";
    }
}
?>