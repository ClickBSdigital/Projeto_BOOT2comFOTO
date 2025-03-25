<?php

require './App/Classes/Usuario.php';
//$objUser = new Usuario();
// print_r($_POST);

// if(isset($_POST['cadastrar'])){ // pregunta se botão foi clicado

if($_SERVER['REQUEST_METHOD'] === 'POST'){ //VEM ALGO NO POST E TEM CPF??? TEM QUE SER **IDENTICO**...

    // echo '<script> alet("CHEGOU NO PHP" ) </script>'; teste se chegou

  $nome = $_POST['nome'];
  $cpf = $_POST['cpf'];
  $senha = $_POST['senha'];
  $email = $_POST['email'];
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

  $objUser = new Usuario();
  $objUser->nome = $nome;
  $objUser->cpf = $cpf;
  $objUser->senha = password_hash($senha,PASSWORD_DEFAULT);
  $objUser->email = $email;
  // $objUser->foto = $path;
  $objUser->foto = "caminho";
  $objUser->id_perfil = $perfil;

  //print_r($objUser);
  $res = $objUser->cadastrar();

  if($res){
    // echo '<script> alert("Cadastrado com sucesso!!") </script> '; EM HTML
    $resposta = array("mensagem" => "Cadastrodo com sucesso", "status" => "Ok");
    echo json_encode($resposta);

  }else{
    // echo '<script> alert("Erro ao cadastrar!!") </script> '; EM HTML
    $resposta = array("mensagem" => "Cadastrodo com sucesso", "status" => "ERRO");
    echo json_encode($resposta);
  }
}

?>