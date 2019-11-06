<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/cadastrarvacina.css')}}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-png" />
    <script src="https://kit.fontawesome.com/f82b3ec5fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Cadastro de Vacina</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">
                    <form class="" action="" method="" onsubmit="">
                        <!-- para preenchimento do back-end -->
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Selecione a vacina </label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <!-- Values em # para preenchimento do back-end conforme modelagem do banco -->
                                      <option value="#"></option>
                                      <option value="#">BCG</option>
                                      <option value="#">DTP(difteria, tétano e coqueluche)</option>
                                      <option value="#">DUPLA ADULTO</option>
                                      <option value="#">FEBRE AMARELA</option>
                                      <option value="#">INFLUENZA</option>
                                      <option value="#">HEPATITE A</option>
                                      <option value="#">HEPATITE B</option>
                                      <option value="#">HPV</option>
                                      <option value="#">MENINGOCÓCICA C (conjulgada)</option>
                                      <option value="#">PENTA (difteria, tétano, coqueluche, hepatite B e infecções causadas pelo Haemophilus influenzae B)</option>
                                      <option value="#">PNEUMOCÓCICA 10 VALENTE (conjulgada)</option>
                                      <option value="#">PNEUMOCÓCICA 23 VALENTE</option>
                                      <option value="#">POLIOMELITE 1,2 e 3 (VIP)</option>
                                      <option value="#">ROTAVIRUS</option>
                                      <option value="#">TÉTANO</option>
                                      <option value="#">TETRA VIRAL</option>
                                      <option value="#">TRíPLICE VIRAL</option>
                                      <option value="#">VARICELA ATENUADA</option>

                                      
                                    </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Tipo de Dose </label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                          <option value="#"></option>
                                          <option value="#">1º Dose</option>
                                          <option value="#">2º Dose</option>
                                          <option value="#">3º Dose</option>
                                          <option value="#">Reforço</option>
                                        </select>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="i_data">Data do Agendamento</label>
                                <input type="date" class="form-control" id="i_data">
                            </div>


                        </div>
                        <button type="submit" onclick="alert('Cadastro realizado com sucesso!')" class="btn btn-primary">Cadastrar</button>
                    </form>
                </th>
            </tr>

        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>