function mascara(o, f) {
    objeto = o;
    funcao = f;
    setTimeout("executaMascara()", 1);
}

function executaMascara() {
    objeto.value = funcao(objeto.value);
}

//MÁSCARA DO RG
function rg(variavel) {
    variavel = variavel.replace(/\D/g, ""); // REMOVE TUDO QUE NAO É NUMERO

    // COLOCA UM PONTO APOS O TERCEIRO DIGITO
    variavel = variavel.replace(/(\d{3})(\d)/, "$1.$2");

    // COLOCA UM PONTO APOS O SEXTO DIGITO
    variavel = variavel.replace(/(\d{3})(\d)/, "$1.$2");

    // COLOCA HIFEN APÓS O SEXTO DIGITO OU SETIMO DIGITO 
    variavel = variavel.replace(/(\d{3})(\d{1,2})$/, "$1-$2");

    return variavel

}

//MÁSCARA DO CPF
function cpf(variavel) {
    variavel = variavel.replace(/\D/g, ""); // REMOVE TUDO QUE NAO É NUMERO

    // COLOCA UM PONTO APOS O TERCEIRO DIGITO
    variavel = variavel.replace(/(\d{3})(\d)/, "$1.$2");

    // COLOCA UM PONTO APOS O SEXTO DIGITO
    variavel = variavel.replace(/(\d{3})(\d)/, "$1.$2");

    // COLOCA HIFEN APÓS O SEXTO DIGITO OU SETIMO DIGITO 
    variavel = variavel.replace(/(\d{3})(\d{1,2})$/, "$1-$2");

    return variavel

}

//MASCARA DO CEP
function cep(variavel) {
    variavel = variavel.replace(/\D/g, ""); // REMOVE TUDO QUE NAO É NUMERO

    // ADICIONA O HÍFEN NA MÁSCARA DE CEP
    variavel = variavel.replace(/(\d{5})(\d{1,3})$/, "$1-$2");

    return variavel; 
}

//MASCARA CIDADE, NOME, BAIRRO...
function validarlocal(campo){
    campo.value=campo.value.replace(/[^a-zA-ZÀ-ÿ\s]/g,"");
    return campo
}

//MASCARA NUMERO
function numero(variavel) {
    variavel = variavel.replace(/\D/g, ""); // REMOVE TUDO QUE NAO É NUMERO
    return variavel
}



