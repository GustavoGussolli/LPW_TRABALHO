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
</head>

<body>
    <div>
        <?php if (empty($jogos)): ?>
            <p>Nenhum jogo cadastrado ainda.</p>
        <?php else: ?>
            <?php foreach ($jogos as $jogo): ?>
                <img src="<?= $jogo->getCapaJogo() ?>" alt="Capa do jogo <?= $jogo->getNomeJogo() ?>" />
                <h2><?= $jogo->getNomeJogo() ?></h2>
                <p><?= $jogo->getDescricao() ?></p>
                <ul>
                    <li>Desenvolvedor:<?= $jogo->getDesenvolvedor() ?></li>
                    <li>Lançamento:<?= $jogo->getDataLancamento() ?></li>
                    <li>Idioma:<?= $jogo->getIdiomaPrimario() ?></li>
                    <li>Classificação:<?= $jogo->getClassificacaoEtaria() ?></li>
                    <li>Gêneros:<?= $jogo->getGeneros() ?></li>
                    <li>Modo:<?= $jogo->getModoJogo() ?></li>
                    <li>Plataforma:<?= $jogo->getPlataforma() ?></li>
                </ul>
                <p>Preço: R$ <?= $jogo->getPreco() ?></p>

            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <button><a href="index.php">Voltar</a></button>
</body>

</html>