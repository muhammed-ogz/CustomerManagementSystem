<?php

namespace Core;

use PDO;

class Database
{
    public $connection;
    public function __construct()
    {
        // $this->connection = new PDO('mysql:host=localhost;dbname=customermanagementsystem','root','12345');
        $this->connection = new PDO('mysql:host=localhost;dbname=todoapp','root','12345');
    }

    public function query($sql, $multi = false)
    {
        if($multi == false){
            return $this->connection->query($sql,\PDO::FETCH_ASSOC)->fetch() ?? [];
        }else{
            return $this->connection->query($sql,\PDO::FETCH_ASSOC)->fetchAll() ?? [];
        }
    }
}
