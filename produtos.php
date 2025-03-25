<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Sys CAD</title>
    <!-- endereço onde esta o arquivo do js -->
    <!-- <script src="./js/valid2.js" defer></script>  -->
    <!-- <script src="./js/brincar.js" defer></script>  -->
    <script src="./js/action_cadastrar.js" defer></script> 
    <style>
      .esconde{
        /* display:none; */
        visibility:hidden;
      }

      #modal{
        position: absolute;
        top:30%;
        margin:0 auto;
        height:300px;
        width: 30%;
        background:#c1c1c1;
      }

      #form_modal{
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
      }
      .chama{
        visibility:visible;
        background-color:red;
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
    <div id="container" class="container">
        <h1 class="mt-4 text-center">Cadastro de Produtos</h1>
    </div>
    <div class="container">
                    
            <form id="myform" method="POST" enctype="multipart/form-data" >
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>

                <div class="mb-3">
                    <label for="preco" class="form-label">Preço</label>
                    <input type="text" class="form-control" id="preco" name="preco">
                </div>
                
                
                <div class="mb-3">
                  <select class="form-select" name="tipo" aria-label="Default select example">
                    <option selected>Selecione o Tipo do Produto</option>
                    <option value="1">Tecnologia</option>
                    <option value="2">Roupa</option>
                    <option value="3">Casa</option>
                  </select>
                </div>
                <button type="reset" id="fuck" class="btn btn-danger">Cancelar</button>
                <button type="submit" id="cadastrar" name="cadastrar" class="btn btn-primary">Cadastrar</button>
                </form>
            </form>
            <!-- MODAL DE CONFIRMAÇÃO -->
    </div>
    <dialog open id="modal" class="esconde">
      <form method="POST" id="form_modal">
        <section>
          <span id="texto"> Cadastado com Sucesso !!! </span>
        </section>
        <section>
          <button id="enviar" type="submit"> OK </button>
        </section>
      </form>
    </dialog>


    
</body>
</html>