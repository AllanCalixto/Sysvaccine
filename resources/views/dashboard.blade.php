<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SysVaccine</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> -->


</head>

<body id="fundo-img" background="img/sysvaccine.jpg">

    <nav class="site-header sticky-top py-1" id="nav-primaria">
      <div class="container d-flex flex-column flex-md-row justify-content-between" id="div-nav">
      <div class="navbar-header" id="div-header">
       <label id="label-header">
        <img src="img/logo.png" alt="" id="logo">
        </label>
    </div>
        <a class="nav-link a-font" id="myBtn"  href="#">Perfil</a>
        <a class="nav-link a-font" href="{{route('cadastrarvacina')}}">Cadastrar Vacina</a>
        <a class="nav-link a-font" href="{{route('emitircartao')}}">Emitir Cartão</a>
        <a class="nav-link a-font" href="http://localhost:8000/dashboard/cartao/emitir/relatorio">Visualizar Cartão</i>
        <a class="nav-link a-font" href="">Sair</a>
      </div>
    </nav>

  <div class="jumbotron" id="jumbotron">
  <h1 class="display-4">Seja bem vindo</h1>
  <p class="lead">Este é um sistema simples de agendamento de vacinas e de fácil utilização.</p>
  <hr class="my-4">
  <p>Para contato, utilize o canal abaixo:</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button" id="btn-jumbo">Envie uma mensagem</a>
  </p>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <h5 class="modal-title">Perfil</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body" style="padding:40px 50px; display: flex;">
        <form role="form">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="l_nome">Nome</label>
              <label class="form-control"> {{$teste->name}} </label>
           </div>
           <div class="form-group col-md-6">
             <label for="l_sobrenome">Sobrenome</label>
             <label class="form-control" > {{$teste->lastname}} </label>
           </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="l_mail">E-mail</label>
              <label class="form-control" > {{$teste->email}} </label>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-7">
              <label for="l_data">Dt de Nascimento</label>
              <label class="form-control" > {{$teste->birth}} </label>
            </div>
            <div class="form-group col-md-7>
              <label for="l_cpf">CPF</label>
              <label class="form-control" > {{$teste->cpf}} </label>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-5">
              <label for="l_fone">Telefone</label>
              <label class="form-control" > {{$teste->fone}} </label>
            </div>
            <div class="form-group col-md-4">
              <label for="t_city">Cidade</label>
              <label class="form-control" > {{$teste->city}} </label>
            </div>
            <div class="form-group col-md-3">
              <label for="t_estado">Estado</label>
              <label class="form-control" > {{$teste->uf}} </label>
            </div>
          </div>

        </form>
    </div>

  </div>
</div>

<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
