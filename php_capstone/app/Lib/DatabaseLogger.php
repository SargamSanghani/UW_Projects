<?php

namespace App\Lib;
use App\Lib\Interfaces\ILogger;

class DatabaseLogger implements ILogger {

    private $dbh;

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function write($event) {

            $query = "INSERT INTO log
                (event)
                VALUES
                (:event)";
    
            $stmt = $this->dbh->prepare($query);
    
            $stmt->bindValue(':event', $event);
    
            $stmt->execute();
    
            $id = $this->dbh->lastInsertId();
            return $id ?? null;
    }
}