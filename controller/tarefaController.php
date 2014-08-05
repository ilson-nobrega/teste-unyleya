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
}