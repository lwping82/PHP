<?php declare(strict_types=1);
namespace Utils\DB;

require_once dirname(__FILE__,3)."/Domain/ResultSetContainer.php";

use PDO;
use Domain\ResultSetContainer;

class SQLHelper {
    function __construct() {}
    
    function executeQuery(PDO $connection, String $sql, Array $params) {
        /*
         Parameters binding can be in the form of
         $sth->execute(array('fn' => $FirstName, 'ln' => $LastName));
         $sth->execute(array(':fn' => $FirstName, ':ln' => $LastName));
         
         $sth->bindParam(':fn', $FirstName);
         $sth->bindParam(':ln', $LastName);
         */
        
        $preparedStmt = $connection->prepare($sql);
        $preparedStmt->execute($params);
        $count = $preparedStmt->rowCount();
        $resultSet = $count===0 ? array() : $preparedStmt->fetchAll(PDO::FETCH_BOTH);        
        $user = new ResultSetContainer($count, $resultSet);

        $preparedStmt = NULL;
        
        return $user;
    }
}
?>
