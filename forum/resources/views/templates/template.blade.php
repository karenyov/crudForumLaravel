<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Fórum - Esportes</title>

  <!-- Custom fonts for this template -->
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="/css/app.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand"><i class="fa fa-futbol-o" aria-hidden="true"></i> Esportes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url("noticias") }}">Notícias</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">

    @yield('content')

    </div>

    <footer class="border-top">
        <div class="row">
        <div class="col-12 col-md" style="text-align:center; margin-top:5px;">
            <small class="d-block mb-3 text-muted">Desenvolvido por: Karen Vicente</small>
        </div>
        </div>
    </footer>

</body>

</html>
