<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sysvaccine</title>
    
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-png" />
    <link rel="stylesheet" href=" {{ asset('css/stylefront.css')}}">
    <script src="https://kit.fontawesome.com/f82b3ec5fe.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="content first-content">
            <!-- tela de login e cadastro -->
            <div class="first-column">
                <img src="img/syringe.png" alt="logo" width="40px" height="40px">
                <h2 class="title-bem">Bem-vindo ao SysVaccine</h2>

                <p class="description description-primary">Um sistema de cartão de vacina virtual,</p>
                <p class="description description-primary">prático e fácil de usar!</p>
                </br>
                <p class="description">Faça seu login</p>
                <button id="singin" class="btn btn-primary">Login</button>
            </div>
            <!-- Primeira coluna dentro da div no 1º content -->
             


            <div class="second-column">
            @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
               @endif

               @if(session('msg1'))
                    <div class="alert alert-success">
                        {{session('msg1')}}
                    </div>
               @endif
                <h2 class="title-cadastro">Cadastro de Usuário</h2>
                <p class="description description-second">Insira seus dados</p>
                <form class="form" action="{{route('create')}}" method="POST" onsubmit="return validaForm(this);">
                @csrf

                    <label class="label-input" for="">
                            <i class="fas fa-user-alt icon-modify"></i>
                            <input type="text" placeholder="Nome" name="name" id="name">
                            <!-- nome -->


                            <input type="text" placeholder="Sobrenome" name="lastname" id="lastname">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-birthday-cake icon-modify"></i>
                        <input type="date" name="birth" id="birth">
                        <!-- data de nasc -->
                     </label>

                    <label class="label-input" for="">
                    <i class="fas fa-phone icon-modify"></i>
                    <input type="tel" placeholder="Telefone" name="fone" id="fone">
                    <!-- telefone -->
                    </label>



                    <label class="label-input" for=" ">
                            <i class="fas fa-city icon-modify "></i>
                            <input type="text " placeholder="Cidade" name="city" id="city">
                    </label>

                    <label class="label-input" for="">

                    <i class="fas fa-map icon-modify"></i>
                    <!-- SELECIONANDO ESTADO ONDE MORA -->
                    <select name="uf" id="uf">
                            <option value="#">UF</option>
                            <option value="#">--</option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AM">AM</option>
                            <option value="AP">AP</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MT">MT</option>
                            <option value="MS">MS</option>
                            <option value="MG">MG</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PR">PR</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RO">RO</option>
                            <option value="RS">RS</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SE">SE</option>
                            <option value="SP">SP</option>
                            <option value="TO">TO</option>
                            </select>
                    <!-- SELECIONANDO ESTADO ONDE MORA -->

                    <i class="fas fa-venus-mars icon-modify"></i>
                            <select name="sexo" id="sexo">
                                    <option value="s">Sexo</option>
                                    <option value="masculino">Masculino</option>
                                    <option value="feminino">Feminino</option>
                                    <option value="outros">Outros</option>
                                </select>
                                <!-- sexo -->
                    </label>

                    <label class="label-input" for="">
                            <i class="fas fa-id-card icon-modify"></i>
                            <input type="text" placeholder="CPF" name="cpf" id="cpf" onkeydown="javascript: fMasc( this, mCPF );" maxlength="14">
                            <!-- CPF -->
                    </label>


                    <label class="label-input" for="">
                        <i class="fas fa-envelope icon-modify"></i>
                            <input type="email" placeholder="E-mail" name="email" id="email">
                            <!-- email -->
                    </label>

                    <label class="label-input" for="">
                            <i class="fas fa-lock icon-modify"></i>
                            <input type="password" placeholder="Digite sua senha" name="password" id="password">
                            <!-- senha -->
                    </label>

                    <label class="label-input" for="">
                            <i class="fas fa-lock icon-modify"></i>
                            <input type="password" placeholder="Confirme sua senha" name="password-check" id="password-check">
                            <!-- confirmar senha -->
                    </label>

                    <button class="btn btn-second">Enviar</button>

                </form>
            </div>
            <!-- Segunda coluna dentro da div no 1º content -->
        </div>
        <!-- Primeira content -->

        <!-- A BAIXO COMEÇA O SEGUNDO CONTEÚDO DA TELA QUE SERÁ FEITA A TRANSIÇÃO ENTRE 1º E 2º CONTEÚDO -->


        <div class="content second-content">
            <div class="content second-content">
                <!-- tela de login e cadastro -->
                <div class="first-column">
                    <img src="img/syringe.png" alt="logo" width="40px" height="40px">
                    <h2 class="title title-bem">SysVaccine</h2>
                    <p class="description description-primary">Um sistema de cartão de vacina virtual, prático e fácil de usar!</p>
                    <p class="description description-primary">Informe seus dados pessoais aqui</p>
                    <button id="singup" class="btn btn-primary">Cadastro</button>
                </div>
                <!-- Primeira coluna dentro da div no 2º content -->

                <div class="second-column">
                  @if($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                      </ul>
                    </div>
                  @endif

                  @if(session('msg'))
                    <div class="alert alert-danger">
                      {{session('msg')}}
                    </div>
                  @endif
                    <h2 class="title title-cadastro">Login</h2>
                    </br>
                    <p class="description description-second">Use seu e-mail de login</p>
                    <form class="form" method="POST" action="{{route('dashboard')}}">
                    @csrf

                        <label class="label-input" for="">
                            <i class="fas fa-user-alt icon-modify"></i>
                            <input type="text" placeholder="E-mail" name="email" id="email">
                            </label>
                        <!-- usuário -->
                        <label class="label-input" for="">
                            <i class="fas fa-lock icon-modify"></i>
                            <input type="password" placeholder="Confirme sua senha" name="password" id="password">
                            <!-- senha -->
                            </label>

                        <a class="password" href="{{route('resetpassword')}}">Esqueci minha senha</a>

                        <button class="btn btn-second">Entrar</button>
                    </form>
                </div>
                <!-- Segunda coluna dentro da div no 2º content -->
            </div>
            <!-- Segunda content -->

        </div>

        <script src="{{ asset('js/appfront.js')}}"></script>

        <script type="text/javascript">
            function fMasc(objeto, mascara) {
                obj = objeto
                masc = mascara
                setTimeout("fMascEx()", 1)
            }
            function fMascEx() {
                obj.value = masc(obj.value)
            }
            function mCPF(cpf) {
                cpf = cpf.replace(/\D/g, "")
                cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
                cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
                cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2")
                return cpf
            }
            function mNum(num) {
                num = num.replace(/\D/g, "")
                return num
            }
        </script>



<script type="text/javascript">
function validaForm(frm) {
    if(frm.name.value ==""|| frm.name.value == null|| frm.name.value<3){
        alert("Por favor, insira um nome válido.");
        frm.name.focus();
        return false;
    }
    if(frm.name.value ==""|| frm.name.value == null|| frm.name.value<3){
        alert("Por favor, insira um sobrenome válido.");
        frm.name.focus();
        return false;
    }
    if(frm.birth.value ==""|| frm.birth.value == null|| frm.birth.value<10){
        alert("Por favor, insira um data de nascimento válida.");
        frm.birth.focus();
        return false;
    }
    if(frm.fone.value ==""|| frm.fone.value == null|| frm.fone.value<11){
        alert("Por favor, insira um número de telefone válido.");
        frm.fone.focus();
        return false;
    }
    if(frm.email.value.indexOf("@") == -1 ||
      frm.email.valueOf.indexOf(".") == -1 ||
      frm.email.value == "" ||
      frm.email.value == null) {
        alert("Por favor, indique um e-mail válido.");
        frm.email.focus();
        return false;
    }
}
</script>

</body>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




</html>
