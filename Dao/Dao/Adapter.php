<?php

namespace Dao\Dao;

use PDO;
use PDOException;

/**
 * Description of Db_Adapter
 *
 * @author André Souza
 */
class Adapter implements InterfaceAdapter {

    private $adapter = "mysql";
    private $conn;
    private $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
    
    const HOST = 'npinf.sytes.net';
    const USER = 'development';
    const PASSWORD = '123456';
    const DATABASE = 'portal_sg';
       
    
    public function getConnection() {


        try {
            $this->conn = new PDO($this->adapter . ":host=" . self::HOST . ";dbname=" . self::DATABASE, self::USER, self::PASSWORD, $this->options);
//            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, 1);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            print "Erro de conexão: " . $ex->getMessage();
        }

        return $this->conn;
    }

    
}
