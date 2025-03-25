// alert("oi, cadastra Actions");

//capitura botaao cadastrar
var btn = document.getElementById("cadastrar");
//adiciona  o evento  de click no botal

// console.log(btn);

// capitura o modal para manipular o css com js , aparece o modal  que tava escondido
var modal = document.getElementById("modal");
console.log(modal);
// console.log(modal);

var formulario = document.getElementById("myform");

function chamaModal(){
    modal.classList.remove("esconde");
    modal.classList.add("chama");
}

btn.addEventListener('click', function (event){
    event.preventDefault()
    chamaModal()

    // console.log(modal.enviar)

    const formulario = document.getElementById("myform");
    const bot_modal = document.getElementById("enviar");

    // console.log(formulario);

    bot_modal.addEventListener('click', async function(event){

        event.preventDefault()

        const formData = new FormData(formulario);

        let dados_php = await fetch('./cadastro_usuario.php',{

            method: 'POST',
            body:formData


        });

        let response = await dados_php.json();

        console.log(response);

        
    })
})