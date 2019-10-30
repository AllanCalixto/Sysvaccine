<!DOCTYPE html>
<html lang="en">
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
    if(frm.USU_Nome.value ==""|| frm.USU_Nome.value == null|| frm.USU_Nome.value<3){
        alert("Por favor, insira um nome válido.");
        frm.USU_Nome.focus();
        return false;
    }
    if(frm.USU_Sobrenome.value ==""|| frm.USU_Sobrenome.value == null|| frm.USU_Sobrenome.value<3){
        alert("Por favor, insira um sobrenome válido.");
        frm.USU_Nome.focus();
        return false;
    }
    if(frm.USU_DtNasc.value ==""|| frm.USU_DtNasc.value == null|| frm.USU_DtNasc.value<10){
        alert("Por favor, insira um data de nascimento válida.");
        frm.USU_Nome.focus();
        return false;
    }
    if(frm.USU_Fone.value ==""|| frm.USU_Fone.value == null|| frm.USU_Fone.value<11){
        alert("Por favor, insira um número de telefone válido.");
        frm.USU_Fone.focus();
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

</html>
