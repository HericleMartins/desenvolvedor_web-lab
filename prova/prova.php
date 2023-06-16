<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Sistema de Prova - Página da Prova</title>
    <link rel="stylesheet" type="text/css" href="../css/prova/prova.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var currentPage = 1;
            var questionsPerPage = 2;

            function showCurrentPage() {
                var startIndex = (currentPage - 1) * questionsPerPage;
                var endIndex = startIndex + questionsPerPage - 1;
                $('form .pergunta').hide().slice(startIndex, endIndex + 1).show();
            }
            showCurrentPage();
            $('#previous-page').click(function(e) {
                e.preventDefault();
                if (currentPage > 1) {
                    currentPage--;
                    showCurrentPage();
                }
            });
            $('#next-page').click(function(e) {
                e.preventDefault();
                var totalQuestions = $('.pergunta').length;
                var totalPages = Math.ceil(totalQuestions / questionsPerPage);
                if (currentPage < totalPages) {
                    currentPage++;
                    showCurrentPage();
                }
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <a id="sair" href="login.php?sair=sair">Sair</a>
        <h1>Página da Prova</h1>
        <form action="result.php" method="post">
            <div class="perguntas-container">
                <div class="pergunta">
                    <h3>Pergunta 1:</h3>
                    <p>Resposta 1: <input type="radio" name="pergunta1" value="resposta1"></p>
                    <p>Resposta 2: <input type="radio" name="pergunta1" value="resposta2"></p>
                    <p>Resposta 3: <input type="radio" name="pergunta1" value="resposta3"></p>
                    <p>Resposta 4: <input type="radio" name="pergunta1" value="resposta4"></p>
                    <p>Resposta 5: <input type="radio" name="pergunta1" value="resposta5"></p>
                </div>
                <div class="pergunta">
                    <h3>Pergunta 2:</h3>
                    <p>Resposta 1: <input type="radio" name="pergunta2" value="resposta1"></p>
                    <p>Resposta 2: <input type="radio" name="pergunta2" value="resposta2"></p>
                    <p>Resposta 3: <input type="radio" name="pergunta2" value="resposta3"></p>
                    <p>Resposta 4: <input type="radio" name="pergunta2" value="resposta4"></p>
                    <p>Resposta 5: <input type="radio" name="pergunta2" value="resposta5"></p>
                </div>
                <div class="pergunta">
                    <h3>Pergunta 3:</h3>
                    <p>Resposta 1: <input type="radio" name="pergunta3" value="resposta1"></p>
                    <p>Resposta 2: <input type="radio" name="pergunta3" value="resposta2"></p>
                    <p>Resposta 3: <input type="radio" name="pergunta3" value="resposta3"></p>
                    <p>Resposta 4: <input type="radio" name="pergunta3" value="resposta4"></p>
                    <p>Resposta 5: <input type="radio" name="pergunta3" value="resposta5"></p>
                </div>
                <div class="pergunta">
                    <h3>Pergunta 4:</h3>
                    <p>Resposta 1: <input type="radio" name="pergunta4" value="resposta1"></p>
                    <p>Resposta 2: <input type="radio" name="pergunta4" value="resposta2"></p>
                    <p>Resposta 3: <input type="radio" name="pergunta4" value="resposta3"></p>
                    <p>Resposta 4: <input type="radio" name="pergunta4" value="resposta4"></p>
                    <p>Resposta 5: <input type="radio" name="pergunta4" value="resposta5"></p>
                </div>
                <div class="pergunta">
                    <h3>Pergunta 5:</h3>
                    <p>Resposta 1: <input type="radio" name="pergunta5" value="resposta1"></p>
                    <p>Resposta 2: <input type="radio" name="pergunta5" value="resposta2"></p>
                    <p>Resposta 3: <input type="radio" name="pergunta5" value="resposta3"></p>
                    <p>Resposta 4: <input type="radio" name="pergunta5" value="resposta4"></p>
                    <p>Resposta 5: <input type="radio" name="pergunta5" value="resposta5"></p>
                </div>
                <div class="pergunta">
                    <h3>Pergunta 6:</h3>
                    <p>Resposta 1: <input type="radio" name="pergunta6" value="resposta1"></p>
                    <p>Resposta 2: <input type="radio" name="pergunta6" value="resposta2"></p>
                    <p>Resposta 3: <input type="radio" name="pergunta6" value="resposta3"></p>
                    <p>Resposta 4: <input type="radio" name="pergunta6" value="resposta4"></p>
                    <p>Resposta 5: <input type="radio" name="pergunta6" value="resposta5"></p>
                </div>
                <div class="pergunta">
                    <h3>Pergunta 7:</h3>
                    <p>Resposta 1: <input type="radio" name="pergunta7" value="resposta1"></p>
                    <p>Resposta 2: <input type="radio" name="pergunta7" value="resposta2"></p>
                    <p>Resposta 3: <input type="radio" name="pergunta7" value="resposta3"></p>
                    <p>Resposta 4: <input type="radio" name="pergunta7" value="resposta4"></p>
                    <p>Resposta 5: <input type="radio" name="pergunta7" value="resposta5"></p>
                </div>
                <div class="pergunta">
                    <h3>Pergunta 8:</h3>
                    <p>Resposta 1: <input type="radio" name="pergunta8" value="resposta1"></p>
                    <p>Resposta 2: <input type="radio" name="pergunta8" value="resposta2"></p>
                    <p>Resposta 3: <input type="radio" name="pergunta8" value="resposta3"></p>
                    <p>Resposta 4: <input type="radio" name="pergunta8" value="resposta4"></p>
                    <p>Resposta 5: <input type="radio" name="pergunta8" value="resposta5"></p>
                </div>
                <div class="pergunta">
                    <h3>Pergunta 9:</h3>
                    <p>Resposta 1: <input type="radio" name="pergunta9" value="resposta1"></p>
                    <p>Resposta 2: <input type="radio" name="pergunta9" value="resposta2"></p>
                    <p>Resposta 3: <input type="radio" name="pergunta9" value="resposta3"></p>
                    <p>Resposta 4: <input type="radio" name="pergunta9" value="resposta4"></p>
                    <p>Resposta 5: <input type="radio" name="pergunta9" value="resposta5"></p>
                </div>
                <div class="pergunta">
                    <h3>Pergunta 10:</h3>
                    <p>Resposta 1: <input type="radio" name="pergunta10" value="resposta1"></p>
                    <p>Resposta 2: <input type="radio" name="pergunta10" value="resposta2"></p>
                    <p>Resposta 3: <input type="radio" name="pergunta10" value="resposta3"></p>
                    <p>Resposta 4: <input type="radio" name="pergunta10" value="resposta4"></p>
                    <p>Resposta 5: <input type="radio" name="pergunta10" value="resposta5"></p>
                </div>

            </div>
            <div class="buttons">
                <button id="previous-page">Página Anterior</button>

                <button type="submit">Enviar</button>
                <button id="next-page">Próxima Página</button>
            </div>
        </form>
    </div>
</body>



</html>