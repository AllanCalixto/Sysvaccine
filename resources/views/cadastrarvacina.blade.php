<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/f82b3ec5fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/cadastrar.css')}}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

    <title>Document</title>
</head>

<body>

</body>

<div class="btn-choice">
    <button>Cadastrar Vacina Padrão</button>
    <button>Cadastrar Vacina Opcional</button>
</div>

<div class="cadastrar">

<form action="" method="">


    <label for="">
    <p>Data de Agendamento</p>
    <i class="far fa-calendar-alt"></i>
    <input type="date" name="data" id="data" placeholder="Agenda">
    </label>

    <label for="">
            <i class="far fa-list-alt"></i>
            <!-- SELECIONA A VACINA -->
            <select name="uf" id="uf">
                    <option value="#">Escolha a vacina</option>
                    <option value="#">--</option>
                    <option value="vacina1">BCG</option>
                    <option value="vacina2">DTP 1º reforço</option>
                    <option value="vacina3">DTP 2º reforço</option>
                    <option value="vacina4">Febre Amarela </option>
                    <option value="vacina5">Hepatite A </option>
                    <option value="vacina6">Hepatite B </option>
                    <option value="vacina7">HPV </option>
                    <option value="vacina8">Influenza</option>
                    <option value="vacina9">Meningocócica C conjugada 1ª dose</option>
                    <option value="vacina10">Meningocócica C conjugada 2ª dose</option>
                    <option value="vacina11">Meningocócica C conjugada reforço</option>
                    <option value="vacina12">Pentavalente 1ª dose (Tetravalente + Hepatite B 2ª dose)</option>
                    <option value="vacina13">Pentavalente 2ª dose (Tetravalente + Hepatite B 2ª dose)</option>
                    <option value="vacina14">Pentavalente 2ª dose (Tetravalente + Hepatite B 3ª dose)</option>
                    <option value="vacina15"> Pneumocócica conjugada 1ª dose</option>
                    <option value="vacina16"> Pneumocócica conjugada 2ª dose</option>
                    <option value="vacina17"> Pneumocócica conjugada reforço</option>
                    <option value="vacina18">Poliomielite 1ª dose (VIP)</option>
                    <option value="vacina19">Poliomielite 2ª dose (VIP)</option>
                    <option value="vacina20">Poliomielite 1ª dose (VIP)</option>
                    <option value="vacina21">Poliomielite 1ª reforço (VOP)</option>
                    <option value="vacina22">Poliomielite 2ª reforço (VOP)</option>
                    <option value="vacina23">Pneumocócica conjugada 2ª dose</option>
                    <option value="vacina24">Rotavírus 1ª dose</option>
                    <option value="vacina25">Rotavírus 2ª dose</option>
                    <option value="vacina26">Tetra viral (Tríplice Viral 2ª dose + Varicela)</option>
                    <option value="vacina26">Triplice Viral</option>
                    <option value="vacina27">Varicela</option>
                    </select>
    </label>

    <button id="singup" class="btn-primary">Cadastrar</button>
    </form>
</div>


<div class="cadastrar-opcional">
<form action="" method="">
    <label for="">
                <p>Data de Agendamento</p>
                <i class="far fa-calendar-alt"></i>
                <input type="date" name="data" id="data" placeholder="Agenda">
                </label>

    <label for="">
                    <input type="text" placeholder="Digite a vacina opcional">
                </label>
    <button id="singup" class="btn-second">Cadastrar</button>
    </form>
</div>

</html>