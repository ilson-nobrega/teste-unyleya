<?php
class tarefaModel{
    
    private $id;
    private $descricao;
    private $status;
    
	/**
     * @return the $id
     */
    public function getId() {
        return $this->id;
    }

	/**
     * @return the $descricao
     */
    public function getDescricao() {
        return $this->descricao;
    }

	/**
     * @return the $status
     */
    public function getStatus() {
        return $this->status;
    }

	/**
     * @param field_type $id
     */
    public function setId($id) {
        $this->id = $id;
    }

	/**
     * @param field_type $descricao
     */
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

	/**
     * @param field_type $status
     */
    public function setStatus($status) {
        $this->status = $status;
    }
}