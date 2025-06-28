<?php
require_once 'DAO/jogoDao.php';

$jogoDao = new JogoDao();
$jogos = $jogoDao->buscarTodos();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Cards</title>
    <link rel="stylesheet" href="styles/style_card.css">
        <link rel="shortcut icon" href="https://img.icons8.com/?size=100&id=zNqjI8XKkCv0&format=png&color=000000" type="image/x-icon">
</head>

<body>
    <div class="card-container">
        <?php if (empty($jogos)): ?>
            <p>Nenhum jogo cadastrado ainda.</p>
        <?php else: ?>
            <?php foreach ($jogos as $jogo): ?>
                <div class="card">
                    <?php if ($jogo->getCapaJogo() != ""): ?>
                        <img src="<?= $jogo->getCapaJogo() ?>" alt="Capa" width="60">
                    <?php else: ?>
                        <img src="https://media.istockphoto.com/id/1143248834/pt/vetorial/question-mark-red-neon-light-on-black-wall.jpg?s=612x612&w=0&k=20&c=o2iKyBemvHinJ_TFqA15ZgpuCajuw6rzxRtu196IBS4="
                            alt="Capa" width="60">
                    <?php endif; ?>

                    <div class="card-content">
                        <h2><?= $jogo->getNomeJogo() ?></h2>
                        <p><?= $jogo->getDescricao() ?></p>
                        <ul>
                            <li>Desenvolvedor: <?= $jogo->getDesenvolvedor() ?></li>
                            <li>Lançamento: <?= $jogo->getDataLancamento() ?></li>
                            <li>Idioma: <?= $jogo->getIdiomaPrimario() ?></li>
                            <li>Classificação: <?php
                            if ($jogo->getClassificacaoEtaria() == "L") {
                                echo "Livre";
                            }
                            if ($jogo->getClassificacaoEtaria() == "14") {
                                echo "14 anos";
                            }
                            if ($jogo->getClassificacaoEtaria() == "16") {
                                echo "16 anos";
                            }
                            if ($jogo->getClassificacaoEtaria() == "18") {
                                echo "+18 anos";
                            } ?>
                            </li>
                            <li>Gêneros: <?= $jogo->getGeneros() ?></li>
                            <li>Modo: <?= $jogo->getModoJogo() ?></li>
                            <li>Plataforma: <?php
                            if ($jogo->getPlataforma() == "N") {
                                echo "Nenhum";
                            }
                            if ($jogo->getPlataforma() == "W") {
                                echo "Windows";
                            }
                            if ($jogo->getPlataforma() == "L") {
                                echo "Linux";
                            }
                            if ($jogo->getPlataforma() == "X") {
                                echo "XBOX";
                            }
                            if ($jogo->getPlataforma() == "P") {
                                echo "Playstation";
                            }
                            if ($jogo->getPlataforma() == "NS") {
                                echo "Nintendo Switch";
                            }
                            ?>
                            </li>
                        </ul>
                        <p class="price">R$ <?= $jogo->getPreco() ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <button><a href="index.php">Voltar</a></button>
</body>

</html>