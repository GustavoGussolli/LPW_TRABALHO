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
    <link rel="stylesheet" href="styles\style_card.css">
</head>

<body>
    <div class="card-container">
        <?php if (empty($jogos)): ?>
            <p>Nenhum jogo cadastrado ainda.</p>
        <?php else: ?>
            <?php foreach ($jogos as $jogo): ?>
                <div class="card">
                    <img src="<?= $jogo->getCapaJogo() ?>" alt="Capa do jogo <?= $jogo->getNomeJogo() ?>">
                    <div class="card-content">
                        <h2><?= $jogo->getNomeJogo() ?></h2>
                        <p><?= $jogo->getDescricao() ?></p>
                        <ul>
                            <li>Desenvolvedor: <?= $jogo->getDesenvolvedor() ?></li>
                            <li>Lançamento: <?= $jogo->getDataLancamento() ?></li>
                            <li>Idioma: <?= $jogo->getIdiomaPrimario() ?></li>
                            <li>Classificação: <?php 
                                if($jogo->getClassificacaoEtaria() == "L"){ echo "Livre"; } 
                                if($jogo->getClassificacaoEtaria() == "14"){ echo "14 anos"; }
                                if($jogo->getClassificacaoEtaria() == "16"){ echo "16 anos";}
                                if($jogo->getClassificacaoEtaria() == "18"){ echo "+18 anos";}?>
                            </li>
                            <li>Gêneros: <?= $jogo->getGeneros() ?></li>
                            <li>Modo: <?= $jogo->getModoJogo() ?></li>
                            <li>Plataforma: <?php   
                                        if($jogo->getPlataforma() == "N"){ echo "Nenhum";}
                                        if($jogo->getPlataforma() == "W"){ echo "Windows";} 
                                        if($jogo->getPlataforma() == "L"){ echo "Linux";} 
                                        if($jogo->getPlataforma() == "X"){ echo "XBOX";} 
                                        if($jogo->getPlataforma() == "P"){ echo "Playstation";} 
                                        if($jogo->getPlataforma() == "NS"){ echo "Nintendo Switch";}
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