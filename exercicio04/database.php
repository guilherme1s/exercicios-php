<?php
session_start();

if (!isset($_SESSION['individuals'])) {
    $_SESSION['individuals'] = [];
}

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

function delIndividual($id) {
    $individuals = &$_SESSION['individuals'];
    
    if (isset($individuals[$id])) {
        unset($individuals[$id]);
        return "Registro $id removido.";
    } else {
        return "Erro: Registro $id não encontrado.";
    }
}

function infoIndividual($id) {
    $individuals = &$_SESSION['individuals'];

    if (isset($individuals[$id])) {
        $individual = $individuals[$id];
        return "$id\n{$individual['first_name']} {$individual['last_name']} {$individual['birthday']} {$individual['phone_number']}\n";
    } else {
        return "Erro: Registro $id não encontrado.";
    }
}

function queryIndividuals($tag, $value) {
    $individuals = &$_SESSION['individuals'];

    $fieldMapping = [
        'fn' => 'first_name',
        'ln' => 'last_name',
        'bd' => 'birthday',
        'ph' => 'phone_number'
    ];

    if (array_key_exists($tag, $fieldMapping)) {
        $field = $fieldMapping[$tag];
        $results = [];

        foreach ($individuals as $id => $individual) {
            if (strpos($individual[$field], $value) !== false) {
                $results[] = $id;
            }
        }

        if (count($results) > 0) {
            $output = "Indivíduos encontrados:\n";
            foreach ($results as $id) {
                $output .= "$id\n";
            }
            return $output;
        } else {
            return "Nenhum registro encontrado para $tag:$value\n";
        }
    } else {
        return "Erro: Tag '$tag' não reconhecida. Use fn, ln, bd ou ph";
    }
}
?>
