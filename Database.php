<?php

class Database
{
    public $connection;

    public function __construct($config, $userName = 'root', $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        $this->connection = new PDO($dsn, $userName, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function execute($query)
    {

        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}