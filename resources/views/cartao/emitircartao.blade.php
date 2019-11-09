<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/f82b3ec5fe.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-png" />
    <link rel="stylesheet" href="{{asset('css/emitircartao.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Emitir Cartão de Vacina</title>
</head>
<body>
  <table class="table">
          <thead>
              <tr>
                  <th scope="col"><i class="fas fa-file-medical"></i>  Cartão de Vacina</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <th scope="row">
                      <form action="{{route('relatorio')}}" method="post">
                        @csrf
                           <div class="form-row">
                              <div class="form-group col-md-5">
                                  <label for="i_nome">Nome</label>
                                  <input type="text" class="form-control" id="" name="">
                              </div>
                              <div class="form-group col-md-5">
                                  <label for="i_sobrenome">Sobrenome</label>
                                  <input type="text" class="form-control" id="" name="">
                              </div>
                              <div class="form-group col-md-2">
                                  <label for="i_cpf">CPF</label>
                                  <input type="text" class="form-control" id="" name="">
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="form-group col-md-2">
                                  <label for="i_data">Data de Nascimento</label>
                                  <input type="date" class="form-control" id="" name="">
                              </div>
                              <div class="form-group col-md-4">
                                  <label for="i_fone">Telefone</label>
                                  <input type="text" class="form-control" id="" name="">
                              </div>
                              <div class="form-group col-md-4">
                                  <label for="i_cidade">Cidade</label>
                                  <input type="text" class="form-control" id="" name="">
                              </div>
                              <div class="form-group col-md-2">
                                  <label for="i_estado">Estado</label>
                                  <input type="text" class="form-control" id="" name="">
                              </div>

                              <div class="form-group col-md-2">
                                  <label for="i_estado">Vacina</label>
                                  <input type="text" class="form-control" id="" name="">
                              </div>
                              <div class="form-group col-md-2">
                                  <label for="i_estado">Dose</label>
                                  <input type="text" class="form-control" id="" name="">
                              </div>
                              <div class="form-group col-md-2">
                                  <label for="i_estado">Data da Realização</label>
                                  <input type="text" class="form-control" id="" name="">
                              </div>
                              
                              </div>
                          </div>
                      <!-- FORM TERMINOU AQUI -->
                  </th>
              </tr>
              <tr>
              </tr>
          </tbody>
      </table>

            <div class="btn-qrcode">
            <a href="http://localhost:8000/dashboard/cartao/emitir/relatorio" class="btn btn-primary" id="btn-visualizar">Vizualizar</a>
              <button type="submit" class="btn btn-primary" name="btn-qrcode" id="btn-qrcode">Emitir Cartão</button>
            </div>
      </form>
     
      
      </div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
