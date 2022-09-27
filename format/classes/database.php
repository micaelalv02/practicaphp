<?php

namespace Classes; 

class Database{
    private $host;
    private $dbh;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
            $this->host='localhost';
            $this->dbh='mica';
            $this->user='root';
            $this->password="";
            $this->charset='utf8mb4';
        }

    public function connect(){
        try{
            $connection = "mysql:host" . $this->host. ";dbname=" . $this->dbh . ";charset=" . $this->charset;
            $options=[  \PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION,
                        \PDO::ATTR_DEFAULT_FETCH_MODE=>\PDO::FETCH_ASSOC,
                        \PDO::ATTR_EMULATE_PREPARES=>false,];
            $pdo=new \PDO($connection, $this->user, $this->password,$options);
            return $pdo;

        }catch(\PDOException $e){
            print_r('Error connection: '.$e->getMessage(), (int)$e->getCode());
        }
    }
}



?>