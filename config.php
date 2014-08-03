<?php

/**
 * @author Ilson Nóbrega
 * 
 * Arquivo de configurações do projeto
 */
    //Raíz do servidor
    $projectPath = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER ['REQUEST_URI'];
    define('PROJECT_PATH', $projectPath);

    //Configuração de diretórios
    define('COMPONENTS_PATH', PROJECT_PATH.'components/');
    define('PUBLIC_PATH', PROJECT_PATH.'public/');
    define('LAYOUT_PATH', PROJECT_PATH.'view/layouts/');
    define('VIEW_PATH', PROJECT_PATH.'view/application/');
    
    //Configuração de banco de dados
    define('DB_HOST', 'localhost');
    define('DB_DATABASE', 'teste-unyleya');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');
