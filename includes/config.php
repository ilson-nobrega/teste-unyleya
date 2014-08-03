<?php

/**
 * @author Ilson Nóbrega
 * 
 * Arquivo de configurações do projeto
 */
    //Raíz do servidor
    $pastaRaiz = '/teste-unyleya';
    $projectUrl = 'http://'.$_SERVER['SERVER_NAME'].$pastaRaiz;
    define('PROJECT_URL', $projectUrl);

    //Configuração de diretórios
    define('COMPONENTS_PATH', PROJECT_URL.'/components');
    define('PUBLIC_PATH', PROJECT_URL.'/public');
    define('LAYOUT_PATH', 'view/layouts');
    define('VIEW_PATH', 'view/application');
    
    //Configuração de banco de dados
    define('DB_HOST', 'localhost');
    define('DB_DATABASE', 'teste-unyleya');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');
    
    //Configuração do Sistema
    define('NAME', 'SIGET - Sistema Gerenciador de Tarefas');
