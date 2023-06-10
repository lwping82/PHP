<?php declare(strict_types=1);
namespace Utils\DB;

use PDO;
use PDOException;

class DBUtils {
    private String $hostName;
    private String $port;
    private String $username;
    private String $password;
    private String $schemaName;
    
    private PDO $connection;
    
    function __construct(String $hostName, String $port, String $username, String $password, String $schemaName) {
        $this->hostName = $hostName;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
        $this->schemaName = $schemaName;
    }
    
    function establishConnection() {
        try {
            $this->connection = new PDO("mysql:host=$this->hostName;port=$this->port;dbname=$this->schemaName;charset=utf8",
                $this->username, $this->password, array(PDO::ATTR_PERSISTENT => TRUE));
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connection established: ";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }
    
    function get_connection() {
        return $this->connection;
    }
    
    function close(&$connection) {
        $connection = NULL;
    }
}
?>