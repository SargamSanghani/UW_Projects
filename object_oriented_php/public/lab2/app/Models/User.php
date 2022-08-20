<?php

class User extends Model {

    protected $table = 'users';

    public function getDbh() {

        return self::$dbh;

    }

    public function create(array $array) {

        $dbh = $this->getDbh();
        $query = "INSERT INTO {$this->table}
        (
            first_name, 
            last_name, 
            street, 
            city, 
            postal_code,
            province,
            country,
            phone,
            email,
            password,
            is_subscribed
        )
        VALUES
        (
            :first_name,
            :last_name,
            :street,
            :city,
            :postal_code,
            :province,
            :country,
            :phone,
            :email,
            :password,
            :is_subscribed
        )";

        $stmt = $dbh->prepare($query);

        $stmt->bindValue(':first_name', $array['first_name']);
        $stmt->bindValue(':last_name', $array['last_name']);
        $stmt->bindValue(':street', $array['street']);
        $stmt->bindValue(':city', $array['city']);
        $stmt->bindValue(':postal_code', $array['postal_code']);
        $stmt->bindValue(':province', $array['province']);
        $stmt->bindValue(':country', $array['country']);
        $stmt->bindValue(':phone', $array['phone']);
        $stmt->bindValue(':email', $array['email']);
        $stmt->bindValue(':password', password_hash($array['password'], PASSWORD_DEFAULT));
        $stmt->bindValue(':is_subscribed', (isset($array['is_subscribed'])) ? 1 : 0);

        $stmt->execute();

        $id = $dbh->lastInsertId();
        return $id ?? null;
    }

    // a function to update the record
    public function update(array $array) {

        $dbh = $this->getDbh();

        // creating dynamic query
        $dynamicStmt = "";
        $i = 0;
        foreach ($array as $key => $value) {
            $i++;
            if ($key != 'id') {
                $dynamicStmt .= $key . "=" . ':' . $key . ($i == count($array) ? "" : ", ");
            }
        }

        $query = "UPDATE {$this->table} 
            SET {$dynamicStmt}
            WHERE id=:id";

        $stmt = $dbh->prepare($query);

        foreach ($array as $key => $value) {
                $params[':' . $key] = $value;
        }

        var_dump($params, $stmt);
        
        $stmt->execute($params);

        $id = $dbh->lastInsertId();
        return $stmt->rowCount();

    }

    // a function to soft delete the record by id
    public function delete(int $id) {

        $array = [
            'id' => $id,
            'deleted' => 1
        ];

        $userCount = $this->update($array);
        return $userCount;

    }

}