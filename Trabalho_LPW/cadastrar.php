<?php
require_once("util\Conexao.php");
require_once("model\Jogo.php");
require_once("DAO\jogoDao.php");

$jogo = new Jogo();

$jogo->setNomeJogo($_POST['nome_jogo']);
$jogo->setDescricao($_POST['descricao']);
$jogo->setDesenvolvedor($_POST['desenvolvedor']);
$jogo->setDataLancamento($_POST['data_lancamento']);
$jogo->setIdiomaPrimario($_POST['idioma_primario']);
$jogo->setClassificacaoEtaria($_POST['classificacao_etaria']);
$jogo->setGeneros($_POST['generos']);
$jogo->setModoJogo($_POST['modo_jogo']);
$jogo->setCapaJogo($_POST['capa_jogo']);
$jogo->setPlataforma($_POST['plataforma']);
$jogo->setPreco($_POST['preco']);

$jogoDao = new JogoDao();
try {
    $jogoDao->inserir($jogo);
    echo "<p>Jogo cadastrado com sucesso!</p>";
    echo "<a href='index.php'>Cadastrar outro jogo</a>";
} catch (Exception $e) {
    echo "<p>Erro ao cadastrar o jogo: " . $e->getMessage() . "</p>";
}
?>