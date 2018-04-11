<html>
<head>
  <meta charset="utf8">
  <link href="/css/app.css" rel="stylesheet">
  <title>Controle de Estoque</title>
</head>
<body>
<div class="container">
  <h1>Listagem de Produtos</h1>

  <table class="table table-striped table-bordered">
    <thead>
    <th>Nome</th>
    <th>Valor</th>
    <th>Descrição</th>
    <th>Quantidade</th>
    </thead>
    <tbody>
    <?php foreach ($produtos as $p) : ?>
      <tr>
        <td><?= $p->nome ?></td>
        <td><?= $p->valor ?></td>
        <td><?= $p->descricao ?></td>
        <td><?= $p->quantidade ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
</body>
</html>