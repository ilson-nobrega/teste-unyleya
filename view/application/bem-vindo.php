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
      <a class="navbar-brand" href="<?php echo PROJECT_URL; ?>">SIGET</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo PROJECT_URL; ?>/bem-vindo/">Home</a></li>
        <li><a href="<?php echo PROJECT_URL; ?>/listagem-de-tarefas/">Listagem de Tarefas</a></li>
        <li><a href="<?php echo PROJECT_URL; ?>/incluir-nova-tarefa/">Incluir Nova Tarefa</a></li>
        <li><a href="<?php echo PROJECT_URL; ?>/index/sair">Sair</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
<section class="container">
    <div class="topo-bem-vindo jumbotron text-center">
        <h2>Bem vindo <?php echo $_SESSION['usuario']['nome']; ?>!</h2>
        <p class="lead">Utilize o menu acima para navegar pelo sistema.</p>
    </div>
    <div class="row">
        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
          <h2>Mais comodidade</h2>
          <p>O SIGET foi desenvolvido para facilitar cada vez mais suas rotinas administrativas. Tudo com apenas um clique.</p>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
          <h2>Suporte de qualidade</h2>
          <p>Contamos com uma equipe especializada, prontamente apta a auxiliá-lo quando precisar. É o SIGET buscando otimizar seu trabalho. </p>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
          <h2>Bugs corrigidos diariamente</h2>
          <p>Nossa equipe de manutenção trabalha exaustivamente em busca de bugs para corrigi-los. </p>
        </div>
    </div>
    <div class="footer">
        <p>&copy; Ilson Nóbrega - 2014</p>
    </div>
</section>