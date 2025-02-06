<?php
include 'map.php';

$inputText = $_GET["text"];

function telephoneNumberConvertion($inputText, $map) {
    if (!preg_match('/^[A-Z0-1-]+$/', $inputText)) {
        exit("<p><strong>Erro:</strong> São aceitos apenas letras maiúsculas (A-Z) / números (0-1) / hífens (-).</p> <a href='index.html'>Voltar</a>");
    }

    $convertedText = '';
    foreach (str_split($inputText) as $character) {
        $convertedText .= ($character == '-' || is_numeric($character))
            ? $character
            : ($map[$character]);
    }

    return $convertedText;
}

$convertedText = telephoneNumberConvertion($inputText, $map);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Texto para Telefone - Resultado</title>
</head>

<body>
    <section>
        <p><strong>Texto Original</strong>: <?php echo $inputText; ?></p>
        <p><strong>Texto Convertido</strong>: <?php echo $convertedText; ?></p>
        <a href="index.html">Voltar</a>
    </section>
</body>

</html>