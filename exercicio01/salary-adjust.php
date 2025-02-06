<?php
$initialSalary = $_GET['salary'];

function adjustSalaryCalc($initialSalary) {
    switch(true) {
        case ($initialSalary <= 280):
            $percent = 20;
            break;
        case ($initialSalary <= 700):
            $percent = 15;
            break;
        case ($initialSalary <= 1500):
            $percent = 10;
            break;
        default:
            $percent = 5;
    }

    $increasedValue = $initialSalary * ($percent / 100);
    $adjustedSalary = $initialSalary + $increasedValue;

    return [
        'initialSalary' => $initialSalary,
        'percent' => $percent,
        'increasedValue' => $increasedValue,
        'adjustedSalary' => $adjustedSalary
    ];
}

if ($initialSalary <= 0) {
    exit("<p>Erro: Salário inválido. O valor precisa ser maior que 0.</p> <a href='index.php'>Voltar</a>");
}

$finalResult = adjustSalaryCalc($initialSalary);
?>

<?php 
$pageTitle = "Reajuste Salarial - Resultados";
include __DIR__ . '/../inc/header.php';  
?>

<body>
    <section>
        <h1>Resultado do Reajuste</h1>
        <p>Salário antes do reajuste: R$ <?= number_format($finalResult['initialSalary'], 2, ',', '.'); ?></p>
        <p>Percentual de aumento aplicado: <?= $finalResult['percent']; ?>%</p>
        <p>Valor do aumento: R$ <?= number_format($finalResult['increasedValue'], 2, ',', '.'); ?></p>
        <p>Seu salário reajustado é: R$ <?= number_format($finalResult['adjustedSalary'], 2, ',', '.'); ?></p>
        
        <a href="index.php">Voltar</a>
    </section>
</body>
</html>