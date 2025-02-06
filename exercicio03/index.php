<?php
$studentsNumber = isset($_GET['students']) ? (int) $_GET['students'] : 0;
$formSubmitted = isset($_GET['students']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem de Votos - Eleição Escolar</title>
</head>
<body>

<h1>Contagem de Votos - Eleição Escolar</h1>

<form method="GET">
    <label for="students">Número de alunos (1 até 100): </label>
    <input type="number" id="students" name="students" min="1" max="100" value="<?= $studentsNumber ?>" required>
    <button type="submit">Criar matriz de alunos</button>
</form>

<?php if ($formSubmitted): ?>
    <?php if ($studentsNumber >= 1 && $studentsNumber <= 100): ?>
        <form action="votes.php" method="POST">
            <table>
                <thead>
                    <tr>
                        <th>Aluno</th>
                        <?php for ($i = 1; $i <= $studentsNumber; $i++): ?>
                            <th>Aluno <?= $i ?></th>
                        <?php endfor; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < $studentsNumber; $i++): ?>
                        <tr>
                            <td>Aluno <?= $i + 1 ?></td>
                            <?php for ($j = 0; $j < $studentsNumber; $j++): ?>
                                <td><input type="checkbox" name="votes[<?= $i ?>][<?= $j ?>]" value="1" <?= ($i == $j) ? 'checked' : '' ?>></td>
                            <?php endfor; ?>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
            <button type="submit">Ver resultado da votação</button>
        </form>
    <?php else: ?>
        <p>Número de alunos inválido. Deve ser entre 1 e 100.</p>
    <?php endif; ?>
<?php endif; ?>

</body>
</html>
