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
    public function sendRedirect($url, $parametros = null){
        
        if($parametros != null){
    			
    		$busca = ',';
    		$substitui = "&";
    		
    		//Função que substitui as vírgulas por &
    		$parametros = str_replace($busca, $substitui, $parametros);
    		
    		echo '<script language="javascript">
    				   location.href="'.$url.'?'.$parametros.'"
    		      </script>';
    	}else{
    		
    		echo '<script language="javascript">
    				   location.href="'.$url.'"
    		      </script>';
    	}
    }
    
    public function alert($mensagem){
    
        echo '<script>
				  alert("'.$mensagem.'");
			  </script>';
    }
    
    public function validaEmail($email){
    
        //Pega o domÃ­nio inserido pelo usuÃ¡rio
        $dominio = explode('@', $email);
    
        if(!ereg('^([a-zA-Z0-9.-])*([@])([a-z0-9]).([a-z]{2,3})', $email)){
            	
            return false;
            	
            //Verificar se o domínio inserido pelo usuário existe
        }else if(!checkdnsrr($dominio[1],'A')){
            	
            return false;
            	
        }else{
            	
            return true;
        }
    }
    
    
}
