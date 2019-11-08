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

    <title>Cartão de Vacina</title>
</head>
<body>
  <div class="card border">
    <div class="card-body">
      <h5 class="card-title">Cartão de Vacinas</h5>
        <table class="table table-ordered table-hover">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nome</th>
              <th>Sobrenome</th>
              <th>CPF</th>
              <th>Nascimento</th>
              <th>Telefone</th>
              <th>Cidade</th>
              <th>Estado</th>
              <th>Vacina/Dose</th>
              <th>1° Dose</th>
              <th>2° Dose</th>
              <th>3° Dose</th>
              <th>1° Reforço</th>
              <th>2° Reforço</th>

            </tr>
          </thead>
          <tbody>
            @foreach($cartao as $cartao)
              <tr>
                <td>{{ $cartao->id }}</td>
                <td>{{ $cartao->i_nome }}</td>
                <td>{{ $cartao->i_sobrenome}}</td>
                <td>{{ $cartao->i_cpf }}</td>
                <td>{{ $cartao->i_data }}</td>
                <td>{{ $cartao->i_fone }}</td>
                <td>{{ $cartao->i_cidade }}</td>
                <td>{{ $cartao->i_estado }}</td>
                <td>{{ $cartao->i_vacina_dose }}</td>
                <td>{{ $cartao->i_primeira_dose }}</td>
                <td>{{ $cartao->i_segunda_dose }}</td>
                <td>{{ $cartao->i_terceira_dose }}</td>
                <td>{{ $cartao->i_primeiro_reforco }}</td>
                <td>{{ $cartao->i_segundo_reforco }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
          <button type="submit" class="btn btn-primary" onclick="window.print()" name="btn-imprimir" id="btn-imprimir">Imprimir</button>
    </div>
  </div>


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
