<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/cursos/product_imobi/storage/favicon-32x32.png" type="image/x-icon">

  <title>Portilio</title>
  <link rel="stylesheet" href="/cursos/product_imobi/_cdn/scss/app.scss">
  <link href="/cursos/product_imobi/_cdn/css/app.css" rel="stylesheet">
  <link href="/cursos/product_imobi/_cdn/css/style.css" rel="stylesheet">
  <link href="/cursos/product_imobi/_cdn/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="/cursos/product_imobi/_cdn/css/admin.css" rel="stylesheet">
  
  


</head>

<body class="bg-gray-100">
  <header>
    <div class="bg-gradient-secondary">
      <div class="container ">
        <div class="row ">
          <div class="col-6 align-self-center ">
            <img src="/cursos/product_imobi/storage/android-chrome-192x192.png" alt="logo" style="max-width: 192px; max-height: 78px">
          </div>
          <div class="col-6 align-self-center">
            <nav>
              <ul class="d-flex justify-content-end main_menu">

                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#projetos">Projetos</a></li>
                <li><a href="#contatos">Contatos</a></li>

              </ul>
            </nav>

          </div>

        </div>
      </div>
    </div>
  </header>

    
<section class="" id="sobre">
      <div class="jumbotron">
        <img src="/cursos/product_imobi/storage/Luiz Victor.gif" alt="gif" style="max-width: 240px; max-height: 112px">
        <h1 class="display-4">Bem-vindo ao meu portfólio</h1>
        <p class="lead">Aqui você encontra todos os meus projetos. </br>
          Esse site é destinado a demonstrar alguns projetos desenvolvidos para enriquecer meu portfólio.
        </p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="https://github.com/luizvictor-lv" target="_blank" role="button">Acessar GITHUB</a>
      </div>
</section>

<section id="projetos">
<h1 class="display-4">Projetos</h1>
      <article class="col-12 my-5 mx-2">
        <div class="container ">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block " src="/cursos/product_imobi/storage/2JAm_sdCozctzizgvdfzn.png" alt="Primeiro Slide" style="max-width: 800px; max-height: 400px">
              </div>
              <div class="carousel-item">
                <img class="d-block" src="/cursos/product_imobi/storage/8Sxo1wkl1V7soJyIRpT_-.png" alt="Segundo Slide" style="max-width: 800px; max-height: 400px">
              </div>
              <div class="carousel-item">
                <img class="d-block" src="/cursos/product_imobi/storage/rwvlfYjG_j-XcnZDetzX4.png" alt="Terceiro Slide" style="max-width: 800px; max-height: 400px">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Próximo</span>
            </a>
          </div>

        </div>
      </article>

    </section>
 
<section class="mb-5"  id="contatos">
  <div class="container p-5  bg-gray-300 ">
  <form action="enviar.php" method="POST">
    <h1 class="my-5">Entre em contato</h1>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nome</label>
  <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Insira seu nome aqui" name="name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">E-Mail</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
</div>
<!-- <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Telefone</label>
  <input type="text" id="exampleFormControlInput1" name="phone" placeholder="(00) 00000-0000" maxlength="15" oninput="formatPhone(this)">
</div> -->
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Que tipo de contato?</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mensagem"></textarea>
</div>
<button type="button" class="btn btn-primary j_modal_envio" data-toggle="modal" data-target="#ExemploModalCentralizado"  >
  Enviar
</button>

<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Contatos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Vai deseja realmente enviar esses dados para contato?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success" id="exampleFormControlInput1" value="Enviar">Enviar Dados</button>
      </div>
    </div>
  </div>
</div>
</div>
</form>
</section>

  <footer class="bg-gradient-secondary py-3">
    <p class="text-center text-white mb-0">Todos os direitos reservados &copy; 2024 | Luiz Victor</p>
  </footer>
  <!-- @include('includes.footer.php') -->

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  <script src="/cursos/product_imobi/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>