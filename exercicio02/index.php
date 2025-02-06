<?php 
$pageTitle = "Conversão de expressões";
include __DIR__ . '/../inc/header.php';  
?>

<body>
    <section>
        <h1>Conversão de Expressões para Números de Telefone</h1>
                
        <form method="get" action="expression-convert.php">
            <label for="text">Digite a sua frase</label>
            <input type="text" name="text" id="text" required />
            <input type="submit" value="Converter" />
        </form>
    </section>
</body>
</html>