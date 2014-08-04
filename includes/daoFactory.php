<?php
/**
 * @author Ilson Nóbrega
 * 
 * Classe de conexão com o banco de dados
 */
include 'config.php';
class daoFactory{
    
    protected $host = DB_HOST;
    protected $db = DB_DATABASE;
    protected $user = DB_USER;
    protected $pass = DB_PASS;
    
    public function __construct(){
        
        try{
            
            $conn = new PDO('mysql: host='.$this->host.';dbname='.$this->db, $this->user, $this->pass);
            
        }catch (PDOException $e){
            
            return array(
                false,
                'erro_codigo' => $e->getCode(),
                'erro_msg'    => $e->getMessage()
            );
        }
    }
    
}