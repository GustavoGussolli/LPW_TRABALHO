CREATE TABLE jogo (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome_jogo VARCHAR(50) NOT NULL,
    descricao VARCHAR(300),
    desenvolvedor VARCHAR(50),
    data_lancamento DATE,
    idioma_primario VARCHAR(40),
    classificacao_etaria VARCHAR(50), 
    generos VARCHAR(100),
    modo_jogo VARCHAR(100),
    capa_jogo VARCHAR(300),
    plataforma VARCHAR(100),
    preco DECIMAL(10,2)
);
