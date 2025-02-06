<?php
require_once 'map.php';
require_once "telephoneNumberConvertion.php";

$inputText = $_GET["text"];

$convertedText = telephoneNumberConvertion($inputText, $map);
?>

<?php 
$pageTitle = "Conversão de expressões pra números de telefone - Resultados";
include __DIR__ . '/../inc/header.php';  
?>

<body>
    <section>
        <p><strong>Texto Original</strong>: <?php echo $inputText; ?></p>
        <p><strong>Texto Convertido</strong>: <?php echo $convertedText; ?></p>
        <a href="index.php">Voltar</a>
    </section>
</body>
</html>
