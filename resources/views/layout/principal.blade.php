<html>
<head>
  <link rel="stylesheet" href="/css/main.css">
  <link href="/css/app.css" rel="stylesheet">
  <title>Controle de estoque</title>
</head>
<body>
<div class="margem-20 container">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <a class="navbar-brand" href="/produtos" id="titulo-principal">Estoque Laravel</a>
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/produtos">Listagem <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/produtos/novo">Adicionar</a>
        </li>
      </ul>
    </nav>
    <div class="corpo-pagina container">
      @yield('conteudo')
    </div>
    <footer class="rodape card-footer text-muted">
      <p>Copyright © 2018 - Tharles Amaro</p>
    </footer>
  </div>
</div>
</body>
</html>