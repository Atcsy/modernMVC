
<?php
 // Connection class has only onw responsibility
class Connection {

    public static function make($config) 
    {
        
            try {
                return new PDO(
                    $config['connection'].';dbname='.$config['name'],
                    $config['username'],
                    $config['password'],
                    $config['options']
                );

                // return new PDO('mysql:host=127.0.0.1;dbname=mvc' ,'root', 'root');
            } catch (PDOException $e)  {
                die($e->getMessage());
            }
        
    }
}