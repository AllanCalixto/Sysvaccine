<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="qGWmmeVY0kdM2FjkI3K1GwLy2tOCnMtUHeJ03gsN">

    <title>Sysvaccine</title>

    <!-- Scripts -->
    <script src="{{asset('esqueci.js')}}" defer="defer"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="http://fonts.gstatic.com/">
    <link href="reset_arquivos/css.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('css/esqueci.css')}}"rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container"><a href="http://localhost:8000/" class="navbar-brand">
                    Sysvaccine
                </a> <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"></li>
                        <li class="nav-item"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Esqueci Minha Senha</div>
                            <div class="card-body">
                                <form method="POST" action="http://localhost:8000/password/email"><input type="hidden" name="_token" value="qGWmmeVY0kdM2FjkI3K1GwLy2tOCnMtUHeJ03gsN">
                                    <div class="form-group row"><label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                                        <div class="col-md-6"><input id="email" type="email" name="email" required="required" autocomplete="email" autofocus="autofocus" class="form-control "></div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4"><button type="submit" class="btn btn-primary">
                                    Redefina sua Senha
                                </button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>


</body>

</html>