// JAVASCRIPT SOLICITA UM MÉTODO DA CLASSA USUÁRIO
// O PHP SOLICITA O MÉTODO BUSCAR
// O MÉTODO BUSCAR SOLICITA À CLASSE DATABASE O MÉTODO SELECT
// A CLASSE DA DATA BASE EM PHP SOLICITA AO MYSQL OS DADOS
// O MYSQL RETORNA UM OBJETO DE DATABASE
// A CLASSE DE USUÁRIO FAZ A FETCH ALL DO OBIJETO E CONVERTE NO FORMATO DE ARRAY EM PHP
// A CLASSE DE USUÁRIO CONVERTE ESSE DADOS PARA JSON E DEVOLVE ESSES DADOS PARA QUEM CHAMOU
// POR FIM O JS DEVOLVE ESSE JSON EM FORMATO DE HTML

var dados_do_banco = [
    {
        "nome":"joao",
        "idade":18,
        "email":"email",
        "cidade":"Campo Grande"
    },
    {
        "nome":"eliandro",
        "idade":18,
        "email":"email",
        "cidade":"Campo Grande"
    },
    {
        "nome":"thiago",
        "idade":18,
        "email":"email",
        "cidade":"Campo Grande"
    }


]
for(var i =0; i < dados_do_banco.length; i++){

    console.log(dados_do_banco[i].nome.dados_do_banco[i].idade);
}






























// /////EM PYTHON É UM DICIONÁRIO -------->>>>> AQUI CHAMA - SE OBIJETO

// var lista = ['banana','uva', 'pera', 'maça']

// console.log(lista)

// console.log(lista[3])

// var pessoa = { // obijeto
//     "nome":"joao",
//     "idade":18,
//     "email":"email",
//     "cidade":"Campo Grande"

// }

// var foms = {
//     "nome":"<input id='nome class='kkk >",
// }

// console.log(foms.nome)


// //////// NO PHP ISSO É UM ARRAY ASSOCIATIVO!!!!!

// //////// NO DART MAP

// console.log(pessoa)

// console.log(pessoa.nome)
// console.log(pessoa.cidade)