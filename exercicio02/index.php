<?php 
$pageTitle = "Conversão de expressões";
include __DIR__ . '/../inc/header.php';  
?>

<body>
    <main>
        <section class="content-wrapper">
            <h1>Conversão de Expressões para Números de Telefone</h1>

            <form method="get" action="expression-convert.php" class="form">
                <label for="text">Digite a sua frase</label>
                <input type="text" name="text" id="text" placeholder="Apenas letras maisculas, hífens (-) e/ou numeros de 0 a 1" required />
                <button type="submit" class="button">Converter</button>
            </form>
        </section>
    </main>
</body>
</html>