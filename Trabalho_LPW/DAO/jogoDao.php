<?php
require_once("model/Jogo.php");

class JogoDao
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=plataforma', 'root', '');
    }

    public function inserir(Jogo $jogo)
    {
        $sql = "INSERT INTO jogo(
                    nome_jogo, descricao, desenvolvedor, data_lancamento, idioma_primario,
                    classificacao_etaria, generos, modo_jogo, plataforma,
                    capa_jogo, preco
                ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stm = $this->pdo->prepare($sql);

        return $stm->execute([
            $jogo->getNomeJogo(),
            $jogo->getDescricao(),
            $jogo->getDesenvolvedor(),
            $jogo->getDataLancamento(),
            $jogo->getIdiomaPrimario(),
            $jogo->getClassificacaoEtaria(),
            $jogo->getGeneros(),
            $jogo->getModoJogo(),
            $jogo->getPlataforma(),
            $jogo->getCapaJogo(),
            $jogo->getPreco()
        ]);
    }

    public function excluir($id)
    {
        $sql = "DELETE FROM jogo WHERE id = ?";
        $stm = $this->pdo->prepare($sql);
        return $stm->execute([$id]);
    }

    public function buscarTodos()
    {
        $sql = "SELECT * FROM jogo";
        $stm = $this->pdo->query($sql);
        $jogos = [];
        
        while($row = $stm->fetch()){
            $jogo = new Jogo();
            $jogo->setId($row['id']);
            $jogo->setNomeJogo($row['nome_jogo']);
            $jogo->setDescricao($row['descricao']);
            $jogo->setDesenvolvedor($row['desenvolvedor']);
            $jogo->setDataLancamento($row['data_lancamento']);
            $jogo->setIdiomaPrimario($row['idioma_primario']);
            $jogo->setClassificacaoEtaria($row['classificacao_etaria']);
            $jogo->setGeneros($row['generos']);
            $jogo->setModoJogo($row['modo_jogo']);
            $jogo->setPlataforma($row['plataforma']);
            $jogo->setCapaJogo($row['capa_jogo']);
            $jogo->setPreco($row['preco']);
            $jogos[] = $jogo;
        }

        return $jogos;
    }
}
