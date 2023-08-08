<?php
namespace app\models;

abstract class Connection
{
    private $db_name = 'mysql:host=localhost; dbname=primeiromvc';
    private $user = 'root';
    private $password ='';

    #Returns a obejct of type PDO, witch carries the propiets of connection to BD
    protected function connect() 
    {
        try {
            $connection = new \PDO($this->db_name, $this->user, $this->password);
            $connection->exec("set names utf8");
            return $connection;
        } catch (\PDOException $error) {
            echo $error->getMessage();
        }
    }
}