<?php 
        $utils = new Utils();
    if(!isset($_SESSION['usuario'])){
        $utils->alert("Você deve efetuar login no sistema primeiro.");
        $utils->sendRedirect(PROJECT_URL.'/index/');
    }
    
    if(isset($_POST['enviar'])){
        
        $descricao = $_POST['descricao'];
        $status    = $_POST['status'];
        
        require 'controller/tarefaController.php';

        $tarefaController = new tarefaController();
        
        $utils->alert("Tarefa cadastrada com sucesso!");
        $tarefaController->incluirTarefa($descricao, $status);
        $utils->sendRedirect(PROJECT_URL.'/listagem-de-tarefas/');
        
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
        <li><a href="<?php echo PROJECT_URL; ?>/listagem-de-tarefas/"><i class="fa fa-list-alt fa-lg"></i> Listagem de Tarefas</a></li>
        <li class="active"><a href="<?php echo PROJECT_URL; ?>/incluir-nova-tarefa/"><i class="fa fa-plus fa-lg"></i> Incluir Nova Tarefa</a></li>
        <li><a href="<?php echo PROJECT_URL; ?>/index/sair"><i class="fa fa-power-off fa-lg"></i> Sair</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
<section class="container">
    <div class="topo-bem-vindo jumbotron text-center">
        <h2>Bem vindo <?php echo $_SESSION['usuario']['nome']; ?>!<h2>
        <p class="lead">Utilize o formulário abaixo para cadastrar uma nova tarefa.</p>
    </div>
    <div class="row">
        <form role="form" action="" method="post">
          <div class="form-group">
            <label for="descricaoTarefa">Descrição da Tarefa</label>
            <input type="text" name="descricao" class="form-control" id="descricaoTarefa" placeholder="Descrição da tarefa">
          </div>
          <div class="form-group">
            <label for="statusTarefa">Status da Tarefa</label>
            <select name="status" class="form-control">
              <option>Selecione um status...</option>
              <option value="pendente">Pendente</option>
              <option value="concluido">Concluída</option>
            </select>
          </div>
          <button type="submit" class="btn btn-success" name="enviar">Enviar</button>
        </form>
    </div>
    <div class="footer">
        <p>&copy; Ilson Nóbrega - 2014</p>
    </div>
</section>