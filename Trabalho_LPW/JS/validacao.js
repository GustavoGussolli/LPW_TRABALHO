function validarCampos(){

    var nome_jogo = document.getElementById('nome_jogo').value.trim();
    var data_lancamento = document.getElementById('data_lancamento').value.trim();
    var generos = document.getElementById('generos').value.trim();
    var preco = document.getElementById('preco').value.trim();

    var erros = [];

    if(nome_jogo === '' || nome_jogo.length < 3){
        erros.push('O nome do jogo deve ter pelo menos 3 caracteres.');
    }

    if(data_lancamento === ''){
        erros.push('Informe a data de lançamento.');
    }

    if(generos === '' || generos.length < 3){
        erros.push('O(s) gênero(s) do jogo devem ter pelo menos 3 caracteres.');
    }

    if(preco === '' || preco <= 0){
        erros.push('Informe um preço válido acima de 0.');
    }

    if(erros.length > 0){
        alert(erros.join('\n'));
        return false;
    }

    return true;
}
