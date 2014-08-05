<?php 
    if(isset($_POST['enviar'])){

        $utils = new Utils();
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        require 'controller/usuarioController.php';
        
        $controller = new usuarioController();
        $db = $controller->logaUsuario($email, $senha);
        if($db != false){
            
            $_SESSION['usuario']['nome'] = $db['nome'];
            $_SESSION['usuario']['email'] = $db['email'];
            
            $utils->sendRedirect(PROJECT_URL.'/bem-vindo/');
            
        }else{
            
            $utils->alert("Erro ao autenticar usuario!");
            $utils->sendRedirect(PROJECT_URL.'/index/');
        }
    }
    
    if(isset($_GET['id']) && $_GET['id'] == 'sair'){
        
        unset($_SESSION['usuario']);
        session_destroy();
        $utils->sendRedirect(PROJECT_URL.'/index/');
    }
?>
<div class="jumbotron topo">
  <div class="container">
    <h2>Bem vindo ao SIGET!</h2>
    <p>Digite seus dados de acesso abaixo para acessar o sistema.</p>
  </div>
</div>
<div class="container">
    <form class="form-signin" role="form" action="" method="post">
        <input type="email" name="email" class="form-control" placeholder="E-mail" required autofocus>
        <input type="password" name="senha" class="form-control" placeholder="Senha" required>
        <button class="btn btn-lg btn-block btn-success" type="submit" name="enviar">Entrar</button>
    </form>
    <div class="footer">
        <p>&copy; Ilson Nóbrega - 2014</p>
    </div>
</div>