<?php 

// 13 - PDO
// 31 March, 2020 - don't use deprecated functions mysql_connect() - inflexible, also allow SQL injection 

require 'Task.php';

require 'functions.php';

$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);



//var_dump($tasks[0]->description); 

require 'index.view.php';