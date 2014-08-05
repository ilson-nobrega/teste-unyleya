<?php

    if(isset($_GET['id'])){
        
        $id = $_GET['id'];
        
        require 'controller/tarefaController.php';
        
        $tarefaController = new tarefaController();
        
        $tarefaController->deletaTarefa($id);
        
        $utils = new Utils();
        
        $utils->sendRedirect(PROJECT_URL.'/listagem-de-tarefas/');
    }
