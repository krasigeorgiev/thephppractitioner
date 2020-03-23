<?php 

// mysql_connect() - deprecated SQL injections don't use it

require 'Task.php';

require 'functions.php';



$pdo = connectToDb();


$tasks = fetchAllTasks($pdo);


require 'index.view.php';
