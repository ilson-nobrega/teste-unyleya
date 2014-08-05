<?php
/**
 * @author Ilson Nóbrega
 *
 * Classe Controller de Usuário
 */
require 'dao/tarefaDAO.php';
class tarefaController{
    
    public function listarTarefasCadastradas(){
        
        $dao = new tarefaDAO();
        
        return $dao->buscarTarefas();
    }
    
    
    public function deletaTarefa($id){
        
        $dao = new tarefaDAO();
        $tarefa = new tarefaModel();
        $tarefa->setId($id);
        
        return $dao->deletarTarefa($tarefa);
        
    }
}