<!DOCTYPE html>
<html>

<head>
    <title>Sistema de Prova - Resultados</title>
    <link rel="stylesheet" type="text/css" href="../css/prova/resultado.css">
</head>

<body>
    <div class="container">
        <?php
        $respostasCorretas = array(
            'resposta1', 'resposta2', 'resposta3', 'resposta4', 'resposta5',
            'resposta1', 'resposta2', 'resposta3', 'resposta4', 'resposta5'
        );
        $certas = 0;
        $erradas = 0;
        $gabarito = "";
        for ($i = 1; $i <= 10; $i += 2) {
            $pergunta1 = 'pergunta' . $i;
            $resposta1 = isset($_POST[$pergunta1]) ? $_POST[$pergunta1] : '';
            $pergunta2 = 'pergunta' . ($i + 1);
            $resposta2 = isset($_POST[$pergunta2]) ? $_POST[$pergunta2] : '';

            $gabarito.= '<div class="perguntas-lado-a-lado">';

            if ($resposta1 === $respostasCorretas[$i - 1]) {
                $gabarito.= '<div class="pergunta certo"';
                $gabarito.= '<h3>Pergunta ' . $i . '</h3>';
                $gabarito.= '<p>Resposta do usuário: ' . $resposta1 . '</p>';    
                $certas++;
            } else {
                $gabarito.= '<div class="pergunta errado"';
                $gabarito.= '<h3>Pergunta ' . $i . '</h3>';
                $gabarito.= '<p>Resposta do usuário: ' . $resposta1 . '</p>';    
                $gabarito.= '<p>Resposta correta: ' . $respostasCorretas[$i - 1] . '</p>';
                $erradas++;
            }

            $gabarito.= '</div>';

            if ($i + 1 <= 10) {
                if ($resposta2 === $respostasCorretas[$i]) {
                    $gabarito.= '<div class="pergunta certo">';
                    $gabarito.= '<h3>Pergunta ' . ($i + 1) . '</h3>';
                    $gabarito.= '<p>Resposta do usuário: ' . $resposta2 . '</p>';    
                    $certas++;
                } else {
                    $gabarito.= '<div class="pergunta errado">';
                    $gabarito.= '<h3>Pergunta ' . ($i + 1) . '</h3>';
                    $gabarito.= '<p>Resposta do usuário: ' . $resposta2 . '</p>';    
                    $gabarito.= '<p>Resposta correta: ' . $respostasCorretas[$i] . '</p>';
                    $erradas++;
                }

                $gabarito.= '</div>';
            }

            $gabarito.= '</div>';
        }

        echo '<div class="resultado">';
        echo '<h2>Resultado Final</h2>';
        echo '<p>Respostas certas: ' . $certas . '</p>';
        echo '<p>Respostas erradas: ' . $erradas . '</p>';

        if ($certas >= 7) {
            echo '<p class="resultado-final aprovado">Parabéns, você foi APROVADO!</p>';
        } else {
            echo '<p class="resultado-final reprovado">Dessa vez não deu. Você foi REPROVADO.</p>';
        }

        echo '</div>';
        echo $gabarito;
        ?>
    </div>
</body>

</html>