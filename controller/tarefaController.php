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
    
    public function incluirTarefa($descricao, $status){
        
        $dao = new tarefaDAO();
        $tarefa = new tarefaModel();
        
        $tarefa->setDescricao($descricao);
        $tarefa->setStatus($status);
        
        return $dao->inserirTarefa($tarefa);
        
    }
    
    public function buscaTarefaPeloId($id){
        
        $dao = new tarefaDAO();
        $tarefa = new tarefaModel();
        $tarefa->setId($id);
        
        return $dao->buscarTarefaPorId($tarefa);
    }
    
    public function editarTarefa($id, $descricao, $status){
        
        $dao = new tarefaDAO();
        $tarefa = new tarefaModel();
        $tarefa->setDescricao($descricao);
        $tarefa->setStatus($status);
        $tarefa->setId($id);
        
        return $dao->editarTarefa($tarefa);
    }
}