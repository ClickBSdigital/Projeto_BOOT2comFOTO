<?php

require './App/Classes/Produto.php';
//$objProd = new Usuario();
// print_r($_POST);

// if(isset($_POST['cadastrar'])){ // pregunta se botão foi clicado

if($_SERVER['REQUEST_METHOD'] === 'POST'){ //VEM ALGO NO POST E TEM CPF??? TEM QUE SER **IDENTICO**...

    // echo '<script> alet("CHEGOU NO PHP" ) </script>'; teste se chegou

  $nome = $_POST['nome'];
  $cpf = $_POST['preco'];
  $perfil = $_POST['perfil'];

  #########################MANIPULANDO ARQUIVOS COM PHP -- FOTOS --- PDFS ETC########

//   //print_r($_FILES);
//   $arquivo = $_FILES['foto'];

//   if ($arquivo['error']) die ("Falha ao enviar a foto");

//   $pasta = '../uploads/fotos/';
//   $nome_foto = $arquivo['name'];
//   $novo_nome = uniqid();
//   $extensao = strtolower(pathinfo($nome_foto, PATHINFO_EXTENSION));

//   if($extensao != 'png' && $extensao != 'jpg') die ("Arquivo inválido!!!");

//   $path = $pasta . $novo_nome . '.' . $extensao;
//   $foto = move_uploaded_file($arquivo['tmp_name'], $path);

  ########################MANIPULANDO ARQUIVOS COM PHP -- FOTOS --- PDFS ETC########
  //echo "MOVED: " . $foto;

  $objProd = new Produto();
  $objProd->nome = $nome;
  $objProd->preco = $preco;
  $objProd->id_perfil = $perfil;

  //print_r($objProd);
  $res = $objProd->cadastrar();

  if($res){
    // echo '<script> alert("Cadastrado com sucesso!!") </script> '; EM HTML
    $resposta = array("mensagem" => "Cadastrodo com sucesso", "status" => "Ok");
    echo json_encode($resposta);

  }else{
    // echo '<script> alert("Erro ao cadastrar!!") </script> '; EM HTML
    $resposta = array("mensagem" => "Cadastrodo deu ERRO", "status" => "ERRO");
    echo json_encode($resposta);
  }
}

?>