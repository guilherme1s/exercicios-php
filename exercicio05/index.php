<?php 
$pageTitle = "Folha de pagamento";
include __DIR__ . '/../inc/header.php';  
?>

<body>
    <section>
        <h1>Cálculo de Folha de Pagamento</h1>
        
        <form method="get" action="payment-sheet.php">
            <label for="hour-value">Valor da hora</label>
            <input type="number" name="hour-value" id="hour-value" step="0.01" required />

            <label for="worked-hours">Horas trabalhadas</label>
            <input type="number" name="worked-hours" id="worked-hours" step="0.01" required />

            <input type="submit" value="Calcular" />
        </form>
    </section>
</body>
</html>
