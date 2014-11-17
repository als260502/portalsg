<?php
namespace Dao\Dao;

use AdapterInterface;
use Exception;
use PDO;
/**
 * Description of CrudDao
 *
 * @author André Souza
 */
class Database {

    protected $db;
    public function __construct() {
        $this->db = new Adapter();
    }

    public function insert(array $params, $table) {
        
        
        $sql = "insert into $table () values";

        if (!is_array($params)) {
            throw new Exception("o parameto deve ser um array");
            return;
        }

        $index = 0;
        foreach ($params as $param) {

            $pieces [] = "++$index, $param";
        }

        $sql .= implode(',', $pieces) . ")";

        $stmt = Db_Adapter::prepare($sql);
        $stmt->execute();
        return $stmt->lastInsertId();  
    }

    public function update($id) {
        
    }

    /**
     * Faz uma busca em uma tabela do banco de dados
     * referente ao id passado
     *
     * @param integer $id        	
     * @return retorna um Objeto com os dados pertencentes a id passada;
     */
    public function find($id, $table) {
        $sql = "select * from $table where id=:id";
        $stmt = Db_Adapter::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    /**
     * Busca todos os dados de uma determinada tabela
     *
     * @return retorna um Objeto populado com todos os dados de uma
     *         tabela do banco de dados
     */
    public function findAll($table) {
        $sql = "selec * from $table";
        $stmt = Db_Adapter::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * Deleta os dados de uma tabela referentes ao
     * id passado
     *
     * @param integer $id        	
     * @return boolean true se a deleção ocorreu
     *         boolean false se houve algum problema
     */
    public function delete($id, $table) {
        $sql = "delete from $table where id = :id";
        $stmt = Db_Adapter::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
    
    public function search($params){
        
        $sql = "select nome, site, descricao, imagem from anuncios where descricao like CONCAT('%', :param, '%') or nome like CONCAT('%', :param, '%') ";
        $stmt = $this->prepareStmt($sql);
        $stmt->bindParam(':param', $params, PDO::PARAM_STR);
        $stmt->execute();
        //$result = $stmt->fetch(PDO::FETCH_ASSOC);
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        //return $this->decodeValue($result);
        return $result;
        
        
    }
    
    /**
     * 
     * @param string $sql
     * @return \PDOStatement
     */
    private function prepareStmt($sql){
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare($sql);
        return $stmt;
    }
    
    private function decodeValue($value = array()){
         $array = array();  
        for ($i=0;$i<count($value);$i++){
            
            $nome = utf8_encode($value[$i]['nome']);
            $desc = utf8_encode($value[$i]['descricao']);
            
            $result[] = array('nome' => $nome
                             ,'site' => $value[$i]['site']
                             ,'descricao'=> $desc
                             ,'imagem'=>$value[$i]['imagem']);           
        }
        
        return $result;
    }
    
}
