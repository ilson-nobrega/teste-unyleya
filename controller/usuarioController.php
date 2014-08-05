<?php
/**
 * @author Ilson Nóbrega
 * 
 * Classe Controller de Usuário
 */
require 'dao/usuarioDAO.php';
class usuarioController{
    
    public function logaUsuario($email, $senha){
        
        $dao = new usuarioDao();
        $usuario = new usuarioModel();
        
        $usuario->setEmail($email);
        $usuario->setSenha($senha);
        
        if($dao->logarUsuario($usuario) != false){
            
            return $dao->logarUsuario($usuario);
        }
        
    }
    
}