<?php
require_once 'DAO/jogoDao.php';
require_once 'model/Jogo.php';

$jogoDao = new JogoDao();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $jogoDao->excluir($id);
}

$jogos = $jogoDao->buscarTodos();
$msgErro = "";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de jogos</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="shortcut icon" href="https://img.icons8.com/?size=100&id=zNqjI8XKkCv0&format=png&color=000000" type="image/x-icon">
</head>

<body>

    <div id="listagem">
        <h2>Jogos Cadastrados</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Desenvolvedor</th>
                <th>Lançamento</th>
                <th>Idioma</th>
                <th>Classificação</th>
                <th>Gêneros</th>
                <th>Modo</th>
                <th>Plataforma</th>
                <th>Preço (R$)</th>
                <th>Capa</th>
                <th>Excluir</th>
            </tr>
            <?php foreach ($jogos as $jogo): ?>
                <tr>
                    <td><?= $jogo->getId() ?></td>
                    <td><?= $jogo->getNomeJogo() ?></td>
                    <td><?= $jogo->getDescricao() ?></td>
                    <td><?= $jogo->getDesenvolvedor() ?></td>
                    <td><?= $jogo->getDataLancamento() ?></td>
                    <td><?= $jogo->getIdiomaPrimario() ?></td>
                    <td><?php if ($jogo->getClassificacaoEtaria() == "L") {
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
                    } ?></td>
                    <td><?= $jogo->getGeneros() ?></td>
                    <td><?= $jogo->getModoJogo() ?></td>
                    <td><?php if ($jogo->getPlataforma() == "N") {
                        echo "Nenhum";
                    }
                    if ($jogo->getPlataforma() == "W") {
                        echo "Windows";
                    }
                    if ($jogo->getPlataforma() == "L") {
                        echo "Linux";
                    }
                    if ($jogo->getPlataforma() == "X") {
                        echo "Xbox";
                    }
                    if ($jogo->getPlataforma() == "P") {
                        echo "Playstation";
                    }
                    if ($jogo->getPlataforma() == "NS") {
                        echo "Nintendo Switch";
                    } ?></td>
                    <td><?= $jogo->getPreco() ?></td>

                    <td>
                        <?php if ($jogo->getCapaJogo() != ""): ?>
                            <img src="<?= $jogo->getCapaJogo() ?>" alt="Capa" width="60">
                        <?php else: ?>
                            <img src="https://media.istockphoto.com/id/1143248834/pt/vetorial/question-mark-red-neon-light-on-black-wall.jpg?s=612x612&w=0&k=20&c=o2iKyBemvHinJ_TFqA15ZgpuCajuw6rzxRtu196IBS4="
                                alt="Capa" width="60">
                        <?php endif; ?>
                    </td>

                    <td>
                        <form method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este jogo?');">
                            <input type="hidden" name="id" value="<?= $jogo->getId() ?>">
                            <button type="submit">X</button>
                        </form>
                    </td>

                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <div id="formulario">
        <h1>Cadastro de Jogos</h1>
        <form action="cadastrar.php" method="POST" onsubmit="return validarCampos()">
            <label for="nome_jogo">Nome do jogo</label>
            <input type="text" id="nome_jogo" name="nome_jogo">

            <label for="descricao">Descrição</label>
            <textarea id="descricao" name="descricao"></textarea>

            <label for="desenvolvedor">Desenvolvedor</label>
            <input type="text" id="desenvolvedor" name="desenvolvedor">

            <label for="data_lancamento">Data de Lançamento</label>
            <input type="date" id="data_lancamento" name="data_lancamento">

            <label for="idioma_primario">Idioma Primário</label>
            <input type="text" id="idioma_primario" name="idioma_primario">

            <label for="classificacao_etaria">Classificação Etária</label>
            <select name="classificacao_etaria">
                <option value="">Selecione</option>
                <option value="L">Livre</option>
                <option value="14">14 anos</option>
                <option value="16">16 anos</option>
                <option value="18">18 anos</option>
            </select>

            <label for="generos">Gêneros</label>
            <input type="text" id="generos" name="generos">

            <label for="modo_jogo">Modo de Jogo</label>
            <input type="text" id="modo_jogo" name="modo_jogo">

            <label for="plataforma">Plataforma Principal</label>
            <select name="plataforma" id="plataforma">
                <option value="N">Nenhum específico</option>
                <option value="W">Windows</option>
                <option value="L">Linux</option>
                <option value="X">XBOX</option>
                <option value="P">Playstation</option>
                <option value="NS">Nintendo Switch</option>
            </select>

            <label for="preco">Preço (R$)</label>
            <input type="number" id="preco" step="0.01" min="0" name="preco">

            <label for="capa_jogo">URL da capa do jogo</label>
            <input type="text" id="capa_jogo" name="capa_jogo">

            <div id="divErro">
                <?= $msgErro ?>
            </div>

            <button type="submit">Cadastrar Jogo</button>
            <button><a href="card.php"> Visualizar Cards</a></button>
        </form>
    </div>

    <script src="js/validacao.js"></script>
</body>

</html>