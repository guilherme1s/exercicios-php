<?php 
$pageTitle = "Reajuste salarial";

include __DIR__ . '/../inc/header.php'; 
?>

<body>
    <main>
        <section class="content-wrapper">
            <h1>Reajuste Salarial</h1>
            
            <form method="get" action="salary-adjust.php" class="form">
                <label for="salary">Salário atual</label>
                <input type="number" name="salary" id="salary" step="0.01" required />
                <button type="submit" class="button">Reajustar</button>
            </form>
        </section>
    </main>
</body>
</html>
