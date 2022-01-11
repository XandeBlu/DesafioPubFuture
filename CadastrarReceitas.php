<?php
if(isset($_POST['submit receita'])){
    include_once('Conexao.php');
    $Valor = $_POST['Valor'];
    $DataDeRecebimento = $_POST['Data de recebimento'];
    $DataDeRecebimentoEsperado = $_POST['Data de recebimento esperado'];
    $Descricao = $_POST['Descricao'];
    $Conta = $_POST['Conta'];
    $Tipo = $_POST['Tipo'];



  $result = mysqli_query($conn, "INSERT INTO clientes (Valor, DataDeRecebimento, DataDeRecebimentoEsperada, Descrição, Conta, Tipo)
   VALUES ('$Valor','$DataDeRecebimento','$DataDeRecebimentoEsperado','$Descricao', '$Conta' , '$Tipo')");
}
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title> Controle de Finanças </Title>
           
    </head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="C:\Users\zanin\OneDrive\Documentos\GitHub\DesafioPubFuture\PaginaPricipal.html">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="C:\Users\zanin\OneDrive\Documentos\GitHub\DesafioPubFuture\CadastrarReceitas.html">Cadastrar Receitas</a>
              <a class="nav-link active" href="C:\Users\zanin\OneDrive\Documentos\GitHub\DesafioPubFuture\CadastrarDespesas.html">Cadastrar Despesas</a>
              <a class="nav-link active" href="C:\Users\zanin\OneDrive\Documentos\GitHub\DesafioPubFuture\CadastrarContas.html">Cadastrar Contas</a>
            </div>
          </div>
        </div>
      </nav>
    <form class="row g-3" method="POST" action="PaginaPrincipal.html">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Valor da Receita</label>
      <input type="email" class="form-control" id="inputEmail4" name="Valor">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Data de recebimento</label>
      <input type="password" class="form-control" id="inputPassword4" name="Data de recebimento">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Data de recebimento esperado (Caso seja um dinheiro imprevisto, defina isso em tipo de receita)</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="Exemplo: 12/09/2022" name="Data de recebimento esperado">
    </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">Descrição</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Exemplo: Meu primo me deu um cheque" name="Descricao">
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Conta (É necessário ter uma conta cadastrada)</label>
      <input type="text" class="form-control" id="inputCity" placeholder="Diga qual a conta que receberá o valor da receita" name="Conta">
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">Tipo de Receita</label>
      <select id="inputState" class="form-select" name="Tipo">
        <option selected>Salário</option>
        <option>Presente</option>
        <option>Prêmio</option>
        <option>Dívida</option>
        <option>Empréstimo</option>
        <option>Bicos</option>
        <option>Outro</option>
      </select>
    </div>
    <div class="col-12">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary" name="submit receita">Cadastrar Receita</button>
    </div>
  </form>
        
    </body>