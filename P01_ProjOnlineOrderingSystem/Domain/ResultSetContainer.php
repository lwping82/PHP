<?php declare(strict_types=1);
namespace Domain;

class ResultSetContainer {
    private int $totalRecord;
    private array $resultSet;

    function __construct(int $totalRecord, array $resultSet) {
        $this->totalRecord = $totalRecord;
        $this->resultSet = $resultSet;
    }
    
    function get_totalRecord() {
        return $this->totalRecord;
    }
    
    function get_resultSet() {
        return $this->resultSet;
    }
}
?>
