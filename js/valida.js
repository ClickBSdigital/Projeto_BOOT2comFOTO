// alert("oi");

const btn = document.getElementById("cancelar"); // capiturando o botão cancelar

btn.addEventListener('click', function(){

    const nome = document.getElementById("nome"); // capiturando o botão cancelar
    const email = document.getElementById("email"); // capiturando o botão cancelar
    const cpf = document.getElementById("cpf"); // capiturando o botão cancelar
    const senha = document.getElementById("senha"); // capiturando o botão cancelar
    const confsenha = document.getElementById("confsenha"); // capiturando o botão cancelar

    // console.log(nome.value);
    // console.log(email.value);
    // console.log(cpf.value);
    // console.log(senha.value);

    if(nome.value.length < 3){
        alert("O nome deve ter mais de 2 caracteres")
    }

    if(cpf.value == ""){
        alert("FAVOR PREENCHA O CPF")
    }

    if(senha.value != confsenha.value){
        alert("Senhas nâo Batemmmm!!!!!! DIGITE A SENHA NOVAMENTE")
    }
    else{
        alert("Senhas Confere!!!")
    }



});

