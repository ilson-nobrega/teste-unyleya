<?php
    //Chama os includes
    require 'includes.php';
    $includes = new importaIncludes();
    
    $dao = new daoFactory();
    
    //Chama um novo objeto Utils
    $utils = new Utils();
    
    if(isset($_GET['page'])){
        
        $page = $_GET['page'];
    }else{
        
        $utils->sendRedirect('index/');
    }
    
    //Chama o arquivo de header
    require 'view/layouts/header.php';
    
    //Pega o conteúdo da página
    $pagina = $utils->getSection($page);
    
    if($pagina[0] == false){
        echo 'Erro '.$pagina['erro_codigo'].'. ',$pagina['erro_msg'];
    }

    
    //Chama o arquivo de footer
    require 'view/layouts/footer.php';
    
?>