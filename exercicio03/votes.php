<?php
if (!isset($_POST['votes']) || empty($_POST['votes'])) {
    echo "<p>Nenhum voto registrado.</p> <a href='index.php'>Voltar</a>";
    exit;
}

$votes = $_POST['votes'];
$totalStudents = count($votes);
$voteCount = array_fill(0, $totalStudents, 0);

foreach ($votes as $row) {
    foreach ($row as $studentIndex => $vote) {
        if ($vote == "1") {
            $voteCount[$studentIndex]++;
        }
    }
}

$maxVotes = max($voteCount);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Votação</title>
</head>
<body>
    <section>
        <p>O vencedor recebeu <strong><?= $maxVotes ?></strong> votos.</p>
        <a href="index.php">Voltar</a>
    </section>
</body>
</html>
