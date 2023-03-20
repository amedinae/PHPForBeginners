<?php

class Database
{
    public $connection;

    public function __construct($dsn)
    {
        $this->connection = new PDO($dsn);
    }

    public function execute($query)
    {

        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}