<?php
/**
 * @author Ilson Nóbrega
 *
 * Classe responsável pelo DAO do usuário
 */

require 'daoFactory.php';
require 'models/tarefaModel.php';
class tarefaDAO{
    
    public static $instance;
    
    
    public static function getInstance(){
    
        if(!isset(self::$instance)){
    
            self::$instance = new usuarioDao();
        }
    
        return self::$instance;
    }
    
    public function buscarTarefas(){
        
        $lista = false;
        
        try{
            
            $sql = 'SELECT id, descricao, status FROM tarefa';
            
            $lista = daoFactory::getInstance()->query($sql);
            
        }catch (Exception $e){
            
            echo $e->getMessage();
            
            return false;
        }
        
        return $lista;
    }
    
    
    public function deletarTarefa(tarefaModel $tarefa){
        
        try{
            
            $sql = 'DELETE FROM tarefa WHERE id :id';
            
            $db = daoFactory::getInstance()->prepare($sql);
            $db->bindValue(":id", $tarefa->getId());
            
            return $db->execute();
            
        }catch (Exception $e){
            
            echo $e->getMessage();
        } 
    }
}