<?php 

function connectToDb() {
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=mvc' ,'root', 'root');
    } catch (PDOException $e)  {
        die($e->getMessage());
    }
}
