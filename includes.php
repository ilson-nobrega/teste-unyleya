<?php
/**
* @author Ilson Nóbrega
* Classe responsável por fazer os includes que serão utilizados no projeto 
*/

class importaIncludes{
    
    //Pasta que será aberta
    private $dir = 'includes/';
    
    //Função construtora
    public function __construct(){
        
        //Abre a pasta
        $abreDiretorio = opendir($this->dir);
        
        //Lê os arquivos da pasta
        while ($arquivo = readdir($abreDiretorio)){
            
            //Abrir apenas os arquivos
            if($arquivo != '.' && $arquivo != '..'){
                
                //Retorna dando include em cada arquivo
                include_once 'includes/'.$arquivo;
            }
        }
    } 
    
}


?>