alert("oi");

const formulario = document.getElementById("myform"); // capiturando o formulario

const bot1 = document.getElementById("cancelar"); // capiturando o botão cancelar
const bot2 = document.getElementById("cadastar"); // capiturando o botão cancelar


// console.log(formulario);
// console.log(bot); print do elemento no console

// var i = 0;
// while(i<10){
//     console.log(i);
//     i++
// }

// alert("Bem Vindo!!")



bot1.addEventListener('click',function(){ //adicionando um evento ao botao capturado
    // alert('Clicou!!!');

    document.getElementById("container").style.backgroundColor="#c1c1c1";
}
)


bot2.addEventListener('click',function(){ //adicionando um evento ao botao capturado
    // alert('Clicou!!!');
    

    document.getElementById("cadastar").style.backgroundColor="#c1c1c1";
}
)


// condicional ternária x = if (tal coisa) ? "issso" : "aquilo"

var mult = (a,b) => a * b

console.log(mult(5,5))