<?php 
function telephoneNumberConvertion($inputText, $map) {
    if (!preg_match('/^[A-Z0-1-]+$/', $inputText)) {
        exit("<p><strong>Erro:</strong> São aceitos apenas letras maiúsculas (A-Z) / números (0-1) / hífens (-).</p> <a href='index.php'>Voltar</a>");
    }

    $convertedText = '';
    foreach (str_split($inputText) as $character) {
        $convertedText .= ($character == '-' || is_numeric($character))
            ? $character
            : ($map[$character]);
    }

    return $convertedText;
}
?>