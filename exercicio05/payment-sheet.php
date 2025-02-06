<?php
$hourValue = isset($_GET['hour-value']) ? floatval($_GET['hour-value']) : 0;
$workedHours = isset($_GET['worked-hours']) ? floatval($_GET['worked-hours']) : 0;

if ($hourValue <= 0 || $workedHours <= 0) {
    die("<p>Valores inválidos, verifique os campos e tente novamente.</p> <a href='index.php'>Voltar</a>");
}

$grossSalary = $hourValue * $workedHours;
$ir = 0;

switch(true) {
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

<?php 
$pageTitle = "Folha de pagamento - Resultados";
include __DIR__ . '/../inc/header.php';  
?>

<body>
    <section>
        <h1>Resultado - Folha de Pagamento</h1>

        <p><strong>Salário Bruto:</strong> R$ <?= number_format($grossSalary, 2, ',', '.') ?></p>
        <p><strong>(-) IR (5%):</strong> R$ <?= number_format($ir, 2, ',', '.') ?></p>
        <p><strong>(-) INSS (10%):</strong> R$ <?= number_format($inss, 2, ',', '.') ?></p>
        <p><strong>(-) Sindicato (3%):</strong> R$ <?= number_format($sindicato, 2, ',', '.') ?></p>
        <p><strong>FGTS (11%):</strong> R$ <?= number_format($fgts, 2, ',', '.') ?></p>
        <p><strong>Total de Descontos:</strong> R$ <?= number_format($totalDiscounts, 2, ',', '.') ?></p>
        <p><strong>Salário Líquido:</strong> R$ <?= number_format($netSalary, 2, ',', '.') ?></p>
        <a href="index.php">Voltar</a>
    </section>
</body>
</html>
