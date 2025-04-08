//EXECUTAR MASCARAS
//DEFINE O OBJETO E CHAMA FUNÇÃO
function mascara(o,f){
    objeto=o
    funcao=f
    setTimeout("executaMascara()",1)

}

function executaMascara() {
    objeto.value=funcao(objeto.value)
}

//MASCARAS

//MASCARA DO TELEFONE

function telefone(variavel){
    variavel=variavel.replace(/\D/g,"")//REMOVE TUDO QUE NÃO É DIGITO

    //ADICIONA PARENTESES EM VOLTA DOS DOIS PRIMEIROS DIGITOS
    variavel=variavel.replace(/^(\d\d)(\d)/g,"($1)$2")

    //ADICIONA HIFEM ENTRE O QUARTO E QUINTO NUMERO
    variavel=variavel.replace(/(\d{4})(\d)/,"$1-$2")
}

//MASCARA DO RG E CPF

function RGeCPF(variavel){
    variavel=variavel.replace(/\D/g,"")//REMOVE TUDO QUE NAO É NUMERO

    //COLOCA UM PONTO APOS O TERCEIRO DIGITO E O QUARTO DIGITO
    variavel=variavel.replace(/(\{3})(\d)/,"$1.$2")

    //COLOCA UM PONTO APOS O SEXTO DIGITO E O SETIMO DIGITO
    variavel=variavel.replace(/(\{3})(\d)/,"$1.$2")

    //COLOCO HIFEM APÓS O SETIMO DIGITO E PERMITE APENAS 2 DIGITOS APOS O HIFEM
    variavel=variavel.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
}

//MASCARA DO CEP

function cep(variavel){
    variavel=variavel.replace(/\D/g,"")//REMOVE TUDO QUE NAO É NUMERO

    variavel=variavel.replace(/(\d{2})(\d)/,"$1.$2")//COLOCA SEGUNDA BARRA

    variavel=variavel.replace(/(\d{3})(\d{1,3})$/,"$1.$2")
    return variavel

}

//MASCARA DATA

function data(variavel){
    variavel=variavel.replace(/\D/g,"")//REMOVE TUDO QUE NAO É NUMERO
    variavel=variavel.replace(/(\d{2})(\d)/,"$1.$2")//COLOCA SEGUNDA BARRA
    variavel=variavel.replace(/(\d{2})(\d)/,"$1.$2")//COLOCA SEGUNDA BARRA
}