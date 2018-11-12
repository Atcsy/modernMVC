<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';

//make a new connection to the database
//$pdo = Connection::make();
//make a query to the databas with the QueryBuilder class
//$query = new QueryBuilder($pdo);

//you can simply write this down

return new QueryBuilder(Connection::make());