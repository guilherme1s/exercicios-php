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

<?php 
$pageTitle = "Resultados da votação";
include __DIR__ . '/../inc/header.php';  
?>

<body>
    <section>
        <p>O vencedor recebeu <strong><?= $maxVotes ?></strong> votos.</p>
        <a href="index.php">Voltar</a>
    </section>
</body>
</html>
