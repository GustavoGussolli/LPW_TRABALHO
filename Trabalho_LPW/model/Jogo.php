<?php

class Jogo
{
    private $id;
    private $nome_jogo;
    private $descricao;
    private $desenvolvedor;
    private $data_lancamento;
    private $idioma_primario;
    private $classificacao_etaria;
    private $generos;
    private $modo_jogo;
    private $plataforma;
    private $capa_jogo;
    private $preco;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome_jogo
     */
    public function getNomeJogo()
    {
        return $this->nome_jogo;
    }

    /**
     * Set the value of nome_jogo
     */
    public function setNomeJogo($nome_jogo): self
    {
        $this->nome_jogo = $nome_jogo;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of desenvolvedor
     */
    public function getDesenvolvedor()
    {
        return $this->desenvolvedor;
    }

    /**
     * Set the value of desenvolvedor
     */
    public function setDesenvolvedor($desenvolvedor): self
    {
        $this->desenvolvedor = $desenvolvedor;

        return $this;
    }

    /**
     * Get the value of data_lancamento
     */
    public function getDataLancamento()
    {
        return $this->data_lancamento;
    }

    /**
     * Set the value of data_lancamento
     */
    public function setDataLancamento($data_lancamento): self
    {
        $this->data_lancamento = $data_lancamento;

        return $this;
    }

    /**
     * Get the value of idioma_primario
     */
    public function getIdiomaPrimario()
    {
        return $this->idioma_primario;
    }

    /**
     * Set the value of idioma_primario
     */
    public function setIdiomaPrimario($idioma_primario): self
    {
        $this->idioma_primario = $idioma_primario;

        return $this;
    }

    /**
     * Get the value of classificacao_etaria
     */
    public function getClassificacaoEtaria()
    {
        return $this->classificacao_etaria;
    }

    /**
     * Set the value of classificacao_etaria
     */
    public function setClassificacaoEtaria($classificacao_etaria): self
    {
        $this->classificacao_etaria = $classificacao_etaria;

        return $this;
    }

    /**
     * Get the value of generos
     */
    public function getGeneros()
    {
        return $this->generos;
    }

    /**
     * Set the value of generos
     */
    public function setGeneros($generos): self
    {
        $this->generos = $generos;

        return $this;
    }

    /**
     * Get the value of modo_jogo
     */
    public function getModoJogo()
    {
        return $this->modo_jogo;
    }

    /**
     * Set the value of modo_jogo
     */
    public function setModoJogo($modo_jogo): self
    {
        $this->modo_jogo = $modo_jogo;

        return $this;
    }

    /**
     * Get the value of plataformas
     */
    public function getPlataforma()
    {
        return $this->plataforma;
    }

    /**
     * Set the value of plataformas
     */
    public function setPlataforma($plataforma): self
    {
        $this->plataforma = $plataforma;

        return $this;
    }

    /**
     * Get the value of capa_jogo
     */
    public function getCapaJogo()
    {
        return $this->capa_jogo;
    }

    /**
     * Set the value of capa_jogo
     */
    public function setCapaJogo($capa_jogo): self
    {
        $this->capa_jogo = $capa_jogo;

        return $this;
    }

    /**
     * Get the value of preco
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     */
    public function setPreco($preco): self
    {
        $this->preco = $preco;

        return $this;
    }
}