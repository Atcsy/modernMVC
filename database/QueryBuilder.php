<?php

class QueryBuilder
{
    public function __constuct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
    $statement = $this->pdo->prepare('SELECT * FROM {$table}');
            $statement->execute();
        
            return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}