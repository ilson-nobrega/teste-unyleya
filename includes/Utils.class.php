<?php
/**
 * @author Ilson Nóbrega
 * 
 * Classe de funções úteis que serão utilizadas no projeto
 */

class Utils{
    
    /**
     * Função responsável por verificar se existe a view requisitada
     * @param string $page
     * @return boolean
     */
    public function getSection($page){
        
        if(!isset($page) || empty($page) || $page == null){
            
            return false;
        }
        
        if(file_exists(VIEW_PATH.'/'.$page.'.php')){
            
            return array(
                    true,
                    require VIEW_PATH.'/'.$page.'.php'
            );
            
        }else{
            
            return array(
                false,
                'erro_codigo' => 500,
                'erro_msg'    => 'Ocorreu um erro ao renderizar a página. Por favor, tente novamente.'
            );
        }
    }
    
    
    /**
     * Função responsável por redirecionar o usuário para o destino requisitado
     * @param string $destino
     * @return boolean
     */
    public function sendRedirect($destino){
        
        if(!isset($destino) || empty($destino) || $destino == null){
            
            return false;
        }
        
        echo "<script>location.href='$destino';</script>";
    }
}