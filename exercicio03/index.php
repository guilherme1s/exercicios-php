<?php
$studentsNumber = isset($_GET['students']) ? (int) $_GET['students'] : 0;
$formSubmitted = isset($_GET['students']);
?>

<?php
$pageTitle = "Contagem de Votos - Eleição Escolar";
include __DIR__ . '/../inc/header.php';
?>

<body>
    <main>
        <section class="content-wrapper">
            <form method="GET" class="form">
                <h1>Contagem de Votos - Eleição Escolar</h1>
                <label for="students">Número de alunos (1 até 100): </label>
                <input type="number" id="students" name="students" min="1" max="100" value="<?= $studentsNumber ?>" required>
                <button type="submit" class="button">Criar matriz de alunos</button>
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
                        <button type="submit" class="button-votes">Resultado</button>
                    </form>
                <?php else: ?>
                    <p>Número de alunos inválido. Deve ser entre 1 e 100.</p>
                <?php endif; ?>
            <?php endif; ?>
            <section>
    </main>
</body>

</html>