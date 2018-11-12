<?php

class QueryBuilder
{
    public function __constuct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll()
    {
            $statement = $pdo->prepare('SELECT * FROM todos');
            $statement->execute();
        
            return $statement->fetchAll(PDO::FETCH_CLASS, $Task);
    }
}