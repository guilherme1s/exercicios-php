<?php 
$pageTitle = "Reajuste salarial";

include __DIR__ . '/../inc/header.php'; 
?>

<body>
    <section>
        <h1>Reajuste Salarial</h1>
        
        <form method="get" action="salary-adjust.php">
            <label for="salary">Salário atual</label>
            <input type="number" name="salary" id="salary" step="0.01" required />
            <input type="submit" value="Reajustar" />
        </form>
    </section>
</body>
</html>
