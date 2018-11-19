<?php

//we can assign the require to $query because we return the new QueryBuilder in the bootstrap.php
$query = require 'bootstrap.php';
require 'Task.php';


$tasks = $query->selectAll('todos', 'Task');



require 'index.view.php';
