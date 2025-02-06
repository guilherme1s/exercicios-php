<?php
$hourValue = isset($_GET['hour-value']) ? floatval($_GET['hour-value']) : 0;
$workedHours = isset($_GET['worked-hours']) ? floatval($_GET['worked-hours']) : 0;

if ($hourValue <= 0 || $workedHours <= 0) {
    die("<p>Valores inválidos, verifique os campos e tente novamente.</p> <a href='index.php'>Voltar</a>");
}

$grossSalary = $hourValue * $workedHours;
$ir = 0;

switch (true) {
    case ($grossSalary > 2500):
        $ir = $grossSalary * 0.20;
        break;
    case ($grossSalary > 1500):
        $ir = $grossSalary * 0.10;
        break;
    case ($grossSalary > 900):
        $ir = $grossSalary * 0.05;
        break;
    default:
        $ir = 0;
}

$sindicato = $grossSalary * 0.03;
$inss = $grossSalary * 0.10;
$fgts = $grossSalary * 0.11; 

$totalDiscounts = $ir + $inss + $sindicato;
$netSalary = $grossSalary - $totalDiscounts;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste Salarial - Resultados</title>
</head>
<body>
    <section>
        <h1>Resultado - Folha de Pagamento</h1>

        <p><strong>Salário Bruto:</strong> R$ <?= number_format($grossSalary, 2, ',', '.') ?></p>
        <p><strong>(-) IR:</strong> R$ <?= number_format($ir, 2, ',', '.') ?></p>
        <p><strong>(-) INSS:</strong> R$ <?= number_format($inss, 2, ',', '.') ?></p>
        <p><strong>(-) Sindicato:</strong> R$ <?= number_format($sindicato, 2, ',', '.') ?></p>
        <p><strong>FGTS (não descontado):</strong> R$ <?= number_format($fgts, 2, ',', '.') ?></p>
        <p><strong>Total de Descontos:</strong> R$ <?= number_format($totalDiscounts, 2, ',', '.') ?></p>
        <p><strong>Salário Líquido:</strong> R$ <?= number_format($netSalary, 2, ',', '.') ?></p>
        <a href="index.php">Voltar</a>
    </section>
</body>
</html>
