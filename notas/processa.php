<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" type="text/css" href="../css/notas/style.css">
</head>

<body>
    <div class="container">
        <a href="../" class="back">Voltar</a>

        <?php
        $nota1 = $_POST["nota1"] ?? 0;
        $nota2 = $_POST["nota2"] ?? 0;
        $nota3 = $_POST["nota3"] ?? 0;
        $recuperacao  = $_POST['recuperacao'] ?? null;
        $media = $_POST['media'] ?? null;

        if ($media) {
            if ($nota1 <= $nota2 && $nota1 <= $nota3) {
                if ($recuperacao > $nota1) $nota1 = $recuperacao;
            } elseif ($nota2 <= $nota1 && $nota2 <= $nota3) {
                if ($recuperacao > $nota2) $nota2 = $recuperacao;
            } else {
                if ($recuperacao > $nota3) $nota3 = $recuperacao;
            }
        }
        $media = ($nota1 + $nota2 + $nota3) / 3;
        if ($media >= 7) {
            echo "<h1>O aluno foi APROVADO com média $media</h1>";
        } else {
            if ($recuperacao) {
                echo "<h1>Aluno reprovado com media $media.</h1>";
            } else {
                echo "<h1>O aluno está em RECUPERAÇÃO.</h1>";
                echo "<form action='processa.php' method='post'>";
                echo "<label for='recuperacao'>Nota da Prova de Recuperação:</label>";
                echo "<input type='number' step='0.0+1' name='recuperacao' required><br>";
                echo "<input type='hidden' name='nota1' value='$nota1'>";
                echo "<input type='hidden' name='nota2' value='$nota2'>";
                echo "<input type='hidden' name='nota3' value='$nota3'>";
                echo "<input type='hidden' name='media' value='$media'>";
                echo "<input type='submit' value='Calcular Nova Média'>";
                echo "</form>";
            }
        }
        ?>
    </div>

</body>

</html>