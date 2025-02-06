<?php 
function addIndividual($id, $firstName, $lastName, $birthday, $phoneNumber) {
    $individuals = &$_SESSION['individuals'];

    if (isset($individuals[$id])) {
        return "O registro com $id já existe.";
    } else {
        $individuals[$id] = [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'birthday' => $birthday,
            'phone_number' => $phoneNumber
        ];
        return "Registro $id inserido.";
    }
}
?>