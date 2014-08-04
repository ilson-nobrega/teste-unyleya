<?php
/**
 * Classe model de Usuário
 * @author Ilson Nóbrega
 *
 */
class usuarioModel{
    
    private $id;
    private $nome;
    private $email;
    private $senha;
    
	/**
     * @return the $id
     */
    public function getId() {
        return $this->id;
    }

	/**
     * @return the $nome
     */
    public function getNome() {
        return $this->nome;
    }

	/**
     * @return the $email
     */
    public function getEmail() {
        return $this->email;
    }

	/**
     * @return the $senha
     */
    public function getSenha() {
        return $this->senha;
    }

	/**
     * @param field_type $id
     */
    public function setId($id) {
        $this->id = $id;
    }

	/**
     * @param field_type $nome
     */
    public function setNome($nome) {
        $this->nome = $nome;
    }

	/**
     * @param field_type $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

	/**
     * @param field_type $senha
     */
    public function setSenha($senha) {
        $this->senha = $senha;
    }
}