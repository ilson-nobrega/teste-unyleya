<?php
/**
 * @author Ilson Nóbrega
 * 
 * Classe responsável pelo DAO do usuário
 */

require 'daoFactory.php';
require 'models/usuarioModel.php';
class usuarioDao{
    
    public static $instance;
    
    
    public static function getInstance(){
        
        if(!isset(self::$instance)){
            
            self::$instance = new usuarioDao();
        }
        
        return self::$instance;
    }
    
    public function logarUsuario(usuarioModel $usuario){
        
        try{
            
            $sql = 'SELECT nome, email, senha FROM usuario WHERE email = :email AND senha = :senha';
            $db = daoFactory::getInstance()->prepare($sql);
            
            $db->bindValue(":email", $usuario->getEmail());
            $db->bindValue(":senha", $usuario->getSenha());
            $db->execute();
            
            return $db->fetch(PDO::FETCH_ASSOC);
            
        }catch (Exception $e){
            
            echo $e->getMessage();
            
            return false;
        }
        
    }
    
}