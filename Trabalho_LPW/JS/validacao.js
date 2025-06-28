function validarCampos() {
    var nome_jogo = document.getElementById('nome_jogo').value.trim();
    var descricao = document.getElementById('descricao').value.trim();
    var desenvolvedor = document.getElementById('desenvolvedor').value.trim();
    var data_lancamento = document.getElementById('data_lancamento').value.trim();
    var idioma_primario = document.getElementById('idioma_primario').value.trim();
    var classificacao_etaria = document.querySelector('select[name="classificacao_etaria"]').value;
    var generos = document.getElementById('generos').value.trim();
    var modo_jogo = document.getElementById('modo_jogo').value.trim();
    var plataforma = document.getElementById('plataforma').value;
    var preco = document.getElementById('preco').value.trim();

    var erros = [];

    if (nome_jogo === '' || nome_jogo.length < 3) {
        erros.push('O nome do jogo deve ter pelo menos 3 caracteres.');
    }

    if (descricao === '' || descricao.length < 10) {
        erros.push('A descrição deve ter pelo menos 10 caracteres.');
    }

    if (desenvolvedor === '' || desenvolvedor.length < 2) {
        erros.push('Informe um nome válido para o desenvolvedor.');
    }

    if (data_lancamento === '') {
        erros.push('Informe a data de lançamento.');
    }

    if (idioma_primario === '') {
        erros.push('Informe o idioma primário.');
    }

    if (classificacao_etaria === '') {
        erros.push('Selecione a classificação etária.');
    }

    if (generos === '' || generos.length < 3) {
        erros.push('O(s) gênero(s) do jogo devem ter pelo menos 3 caracteres.');
    }

    if (modo_jogo === '') {
        erros.push('Informe o modo de jogo.');
    }

    if (plataforma === '') {
        erros.push('Selecione a plataforma principal.');
    }

    if (preco === '' || preco <= 0) {
        erros.push('Informe um preço válido acima de 0.');
    }

    if (erros.length > 0) {
        
        document.getElementById('divErro').innerHTML =
            erros.join("<br>");
        return false;
    }

    return true;
}
