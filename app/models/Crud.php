<?php
namespace app\models;

class Crud extends Connection
{
    
    public function create()
    {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);

        $connection = $this->connect();
        $sql = "insert into tb_person values(default, :nome, :email, :phone)";

        $statement = $connection->prepare($sql);
        $statement->bindParam(':nome', $nome);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':phone', $phone);
        $statement->execute();

    }

    public function read()
    {

        $connection = $this->connect();
        $sql = "select * from tb_person order by nome";

        $statement = $connection->prepare($sql);
        $statement->execute();

        return $statement->fetchAll();
    }

    public function update()
    {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

        $connection = $this->connect();
        $sql = "update tb_person set nome = :nome, email = :email, phone = :phone where id = :id";

        $statement = $connection->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->bindParam(':nome', $nome);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':phone', $phone);
        $statement->execute();
        return $statement;
    }

    public function delete()
    {

        $id = base64_decode(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));

        $connection = $this->connect();
        $sql = "delete from tb_person where id = :id";
        $statement = $connection->prepare($sql);

        $statement->bindParam(':id', $id);
        $statement->execute();
    }
    
    public function read_one()
    {
        $id = base64_decode(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));

        $connection = $this->connect();
        $sql = "select * from tb_person where id = :id";
        $statement = $connection->prepare($sql);

        
        $statement->bindParam(':id', $id);
        $statement->execute();

        return $statement->fetchAll();

    }





}




?>