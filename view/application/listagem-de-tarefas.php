<?php 
    if(!isset($_SESSION['usuario'])){
        $utils = new Utils();
        $utils->alert("Você deve efetuar login no sistema primeiro.");
        $utils->sendRedirect(PROJECT_URL.'/index/');
    }
?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Navegação adaptada</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo PROJECT_URL; ?>"><i class="fa fa-leaf fa-lg"></i> SIGET</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo PROJECT_URL; ?>/bem-vindo/"><i class="fa fa-home fa-lg"></i> Home</a></li>
        <li class="active"><a href="<?php echo PROJECT_URL; ?>/listagem-de-tarefas/"><i class="fa fa-list-alt fa-lg"></i> Listagem de Tarefas</a></li>
        <li><a href="<?php echo PROJECT_URL; ?>/incluir-nova-tarefa/"><i class="fa fa-plus fa-lg"></i> Incluir Nova Tarefa</a></li>
        <li><a href="<?php echo PROJECT_URL; ?>/index/sair"><i class="fa fa-power-off fa-lg"></i> Sair</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
<section class="container">
    <div class="topo-bem-vindo jumbotron text-center">
        <h2>Bem vindo Ilson Nóbrega!</h2>
        <p class="lead">Na tabela abaixo, estão listadas todas as tarefas cadastradas e seu respectivo status.</p>
    </div>
    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Descrição</th>
                  <th>Status</th>
                  <th>Ação</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#0001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                </tr>
                <tr>
                  <td>#0002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                </tr>
               </tbody>
            </table>
           </div>
    </div>
    <div class="footer">
        <p>&copy; Ilson Nóbrega - 2014</p>
    </div>
</section>