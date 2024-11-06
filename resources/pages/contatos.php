<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contatos</title>
    <link href="/cursos/product_imobi/_cdn/css/app.css" rel="stylesheet" >
  </head>
  <body>
<div class="container my-5 ">
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
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Telefone</label>
  <input type="text" id="exampleFormControlInput1" name="phone" placeholder="(00) 00000-0000" maxlength="15" oninput="formatPhone(this)">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
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
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
      function formatPhone(input) {
        let value = input.value.replace(/\D/g, ''); // Remove qualquer caractere que não seja número
        let formatted = value;

        if (value.length > 10) {
            // Formato com 9 dígitos no telefone
            formatted = `(${value.substring(0, 2)}) ${value.substring(2, 7)}-${value.substring(7, 11)}`;
        } else if (value.length > 5) {
            // Formato com 8 dígitos no telefone
            formatted = `(${value.substring(0, 2)}) ${value.substring(2, 6)}-${value.substring(6, 10)}`;
        } else if (value.length > 2) {
            formatted = `(${value.substring(0, 2)}) ${value.substring(2, 6)}`;
        }

        input.value = formatted;
    }


    </script>
  </body>
</html>