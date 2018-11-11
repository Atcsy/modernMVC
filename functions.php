<?php 

function connectToDb() {
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=mvc' ,'root', 'root');
    } catch (PDOException $e)  {
        die($e->getMessage());
    }
}

function fetchAllTasks($pdo) {
    $statement = $pdo->prepare('SELECT * FROM todos');
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, $Task);