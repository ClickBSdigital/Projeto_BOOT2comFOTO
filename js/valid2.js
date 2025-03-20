
//capitura botaao cancelar
var bot = document.getElementById("fuck");
//adiciona  o evento  de click no botal

var formulario = document.getElementById("myform");


console.log(formulario.nome)


// capitura o modal para manipular o css com js , aparece o modal 
var modal = document.getElementById("modal");


var forms_enviar = document.getElementById("form_modal");
// caputurta o form  que ira mandar os dados pra o php


console.log(formulario);




function chamaModal(){
    modal.classList.remove("esconde");
    modal.classList.add("chama");
}


forms_enviar.addEventListener('submit', async function(event) {
    event.preventDefault(); // esperando uma rsposta alback

    const formData = new FormData(formulario);
    let dados_php = await fetch('./teste.php',{ // await espera os dados 
        method:"POST",
        bory:formData
    })

    let response = await dados_php.json();
    console.log(response);

    if(response.status == 200){
        alert("USUÁRIO CADASTRAR COM SUCESSO!!!!")
    }else{
        alert("ERRO AO CADASTRAR O USUÁRIO")
    }

});


bot.addEventListener('click',chamaModal);//chama a função
































// bot.addEventListener('click',function(){ // adiciona o evento de click no botao

//     alert("fuck")



//         var span = document.getElementById("texto"); // capiturando o botão cancelar
//         console.log(span);
    
//         document.getElementById("modal").classList.remove('esconde');

// })
