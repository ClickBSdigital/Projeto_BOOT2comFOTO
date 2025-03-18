<?php

require './App/Classes/Usuario.php';
//$objUser = new Usuario();
// print_r($_POST);

$objUser = new Usuario();

$dados = $objUser->buscar();

//print_r($dados);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <title>Sys CAD</title>
    <style>
      #foto_user{
        width:40%;
        border-radius:50%;
      }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar- bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Cadastro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Contato</a>
              </li>
          
            </ul>
          </div>
        </div>
      </nav>
    <div class="p-5 bg-dark text-white">
        <h1>SysCad</h1>
    
      </div>
    <div class="container">
        <h1 class="mt-4 text-center">Listar Usuários</h1>
    </div>
    <div class="container">
                   
              <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Foto</th>
                      <th scope="col">Nome</th>
                      <th scope="col">CPF</th>
                      <th scope="col">Email</th>
                      <th scope="col">Id perfil</th>
                      <th scope="col">Editar</th>
                      <th scope="col">Excluir</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php
                    foreach($dados as $usuario){
                      echo 
                      '
                      <tr>
                        <th scope="row"> '.$usuario->id_usuario.' </th>
                        <td> <img id="foto_user" src="'.$usuario->foto.'"> </td>
                        <td> '.$usuario->nome.' </td>
                        <td>  '.$usuario->cpf.' </td>
                        <td> '.$usuario->email.' </td>
                        <td> '.$usuario->id_perfil.' </td>
                        <td> <a href="./editar_usuario.php?id_user='.$usuario->id_usuario.'" class="btn btn-primary" > <i class="bi bi-pencil-square"></i>  </a>  </td>
                        <td> <a href="./exlcuir_usuario.php?id_user='.$usuario->id_usuario.'" class="btn btn-danger" > <i class="bi bi-trash3"></i> </a> </td>
                      </tr>
                      ';
                    }

                  ?>
                  </tbody>
                </table>
           
    </div>

    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235203.81500692177!2d-43.58841988251077!3d-22.9111720903467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bde559108a05b%3A0x50dc426c672fd24e!2sRio+de+Janeiro%2C+RJ!5e0!3m2!1spt-BR!2sbr!4v1476880758681" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</body>
</html>