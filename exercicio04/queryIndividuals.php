<?php
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