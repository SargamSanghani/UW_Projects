<?php 

abstract class Model {

    protected static $dbh;

    protected $table;
    protected $key = 'id';

    public static function init($dbh) {
        self::$dbh = $dbh;
    }

    public function getAll() {
        $dbh = self::$dbh;
        $query = "SELECT * FROM " . $this->table;
        $stmt = $dbh->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll() ?? [];
    }

    public function getOne($id) {
        $dbh = self::$dbh;
        $query = "Select * FROM ". $this->table . 
        " WHERE {$this->key} = :id";

        $stmt = $dbh->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    abstract public function create(array $array);

    abstract public function update(array $array);

    abstract public function delete(int $id);


}