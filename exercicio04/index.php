<?php
include('database.php');

$response = '';

if (isset($_GET['command'])) {
    $command = $_GET['command'];
    $params = explode(" ", $command);

    switch ($params[0]) {
        case 'add':
            $response = (count($params) == 6)
                ? addIndividual($params[1], $params[2], $params[3], $params[4], $params[5])
                : "Erro: Comando invalido.";
            break;
        case 'del':
            $response = (count($params) == 2)
                ? delIndividual($params[1])
                : "Erro: Comando invalido.";
            break;
        case 'info':
            $response = (count($params) == 2)
                ? infoIndividual($params[1])
                : "Erro: Comando invalido.";

            break;
        case 'query':
            if (count($params) == 2) {
                list($tag, $value) = explode(":", $params[1]);
                if (in_array($tag, ['fn', 'ln', 'bd', 'ph'])) {
                    $response = queryIndividuals($tag, $value);
                } else {
                    $response = "Erro: Tag '$tag' não reconhecida. Use fn, ln, bd ou ph.";
                }
            } else {
                $response = "Erro: Comando invalido.";
            }
            break;
        default:
            $response = "Erro: Comando invalido.";
            break;
    }
}
?>

<?php 
$pageTitle = "Sistema de Gerenciamento de Indivíduos";
include __DIR__ . '/../inc/header.php';  
?>

<body>
    <h1>Sistema de Gerenciamento de Indivíduos</h1>
    <form method="GET">
        <label for="command">Digite um comando:</label>
        <input type="text" id="command" name="command" required>
        <button type="submit">Executar</button>
    </form>

    <div>
        <?php echo $response; ?>
    </div>
</body>

</html>